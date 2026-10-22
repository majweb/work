<?php

namespace Tests\Feature\Messenger;

use App\Models\ContactBlock;
use App\Models\Conversation;
use App\Models\Firm;
use App\Models\User;
use App\Notifications\ConversationAcceptedNotification;
use App\Notifications\NewMessageNotification;
use App\Services\MessengerService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Notification;
use Spatie\Permission\Models\Role;
use Tests\Concerns\CreatesProjects;
use Tests\TestCase;

/**
 * Wiadomości pracownik - firma/rekruter: kto do kogo pisze, akceptacja, blokady, powiadomienia.
 */
class MessengerTest extends TestCase
{
    use CreatesProjects;
    use RefreshDatabase;

    private User $worker;

    private User $firm;

    private User $recruiter;

    protected function setUp(): void
    {
        parent::setUp();

        foreach (['admin', 'firm', 'recruit', 'worker'] as $role) {
            Role::firstOrCreate(['name' => $role]);
        }

        Notification::fake();

        $this->worker = $this->user('worker');
        $this->firm = $this->user('firm', ['name' => 'Firma Testowa']);
        // Panel firmy wymaga profilu firmy (punkty, logo)
        Firm::factory()->create(['user_id' => $this->firm->id, 'points' => 1000]);
        $this->recruiter = $this->user('recruit', ['name' => 'Anna Rekruter', 'recruiter_from_firm_id' => $this->firm->id]);
    }

    private function user(string $role, array $attributes = []): User
    {
        $user = User::factory()->create($attributes);
        $user->assignRole($role);

        return $user;
    }

    private function start(User $employer, string $body = 'Dzień dobry, interesuje mnie oferta.', array $extra = []): \Illuminate\Testing\TestResponse
    {
        return $this->actingAs($this->worker)->post(route('messages.store'), ['employer_id' => $employer->id, 'body' => $body] + $extra);
    }

    /**
     * Pracodawca odczytuje wiadomość za punkty i akceptuje kontakt.
     */
    private function unlockAndAccept(Conversation $conversation, ?User $employer = null): void
    {
        $employer ??= $this->firm;
        $this->actingAs($employer)->post(route('messages.unlock', $conversation))->assertRedirect();
        $this->actingAs($employer)->post(route('messages.accept', $conversation))->assertRedirect();
    }

    private function conversation(User $employer): Conversation
    {
        return Conversation::where('employer_id', $employer->id)->where('worker_id', $this->worker->id)->firstOrFail();
    }

    public function test_firm_offer_goes_to_firm_and_recruiter_offer_goes_to_recruiter(): void
    {
        $messenger = app(MessengerService::class);

        // Oferta firmy: firma jest właścicielem i głównym rekruterem
        $firmOffer = $this->createProject($this->firm);
        $this->assertTrue($messenger->employerForProject($firmOffer)->is($this->firm));

        // Oferta rekrutera: właścicielem jest firma, głównym rekruterem - rekruter
        $recruiterOffer = $this->createProject($this->firm, ['recruiter_id' => $this->recruiter->id]);
        $this->assertTrue($messenger->employerForProject($recruiterOffer)->is($this->recruiter));

        // Rekruter innej firmy przypisany do oferty - wiadomość idzie do firmy oferty
        $foreign = $this->user('recruit', ['recruiter_from_firm_id' => $this->user('firm')->id]);
        $this->assertTrue($messenger->employerForProject($this->createProject($this->firm, ['recruiter_id' => $foreign->id]))->is($this->firm));
    }

    public function test_presence_on_offer_page_is_not_taken_from_cached_offer(): void
    {
        // Oferta wczytana z cache razem z firmą, która wtedy była offline
        $project = $this->createProject($this->firm)->load('user');
        $this->firm->forceFill(['last_seen_at' => now()])->save();

        $messenger = app(MessengerService::class);
        $this->assertTrue($messenger->contactStateFor($this->worker, $messenger->employerForProject($project), $project)['is_online']);
    }

    public function test_worker_starts_conversation_from_offer_and_employer_is_notified(): void
    {
        $project = $this->createProject($this->firm, ['recruiter_id' => $this->recruiter->id]);

        $this->start($this->recruiter, extra: ['project_id' => $project->id])->assertRedirect();

        $conversation = $this->conversation($this->recruiter);
        $this->assertTrue($conversation->isPending());
        $this->assertSame($project->id, $conversation->project_id);
        $this->assertSame($project->id, $conversation->messages()->first()->project_id);
        Notification::assertSentTo($this->recruiter, NewMessageNotification::class);
    }

    public function test_project_of_another_firm_is_not_attached(): void
    {
        $otherProject = $this->createProject($this->user('firm'));

        $this->start($this->firm, extra: ['project_id' => $otherProject->id])->assertRedirect();

        $this->assertNull($this->conversation($this->firm)->project_id);
    }

    public function test_only_verified_workers_can_start_conversations(): void
    {
        $this->actingAs($this->firm)->post(route('messages.store'), ['employer_id' => $this->recruiter->id, 'body' => 'Hej'])->assertForbidden();

        $unverified = $this->user('worker', ['email_verified_at' => null]);
        $this->assertSame(MessengerService::STATE_UNVERIFIED, app(MessengerService::class)->contactStateFor($unverified, $this->firm)['state']);

        // Do pracownika nie można "zacząć" rozmowy
        $this->start($this->user('worker'))->assertSessionHas('flash.bannerStyle', 'danger');
        $this->assertSame(0, Conversation::count());
    }

    public function test_acceptance_is_required_before_further_messages(): void
    {
        $this->start($this->firm);
        $conversation = $this->conversation($this->firm);

        // Pracownik nie pisze drugi raz, firma nie odpowiada przed akceptacją
        $this->actingAs($this->worker)->post(route('messages.reply', $conversation), ['body' => 'Halo?'])->assertSessionHas('flash.bannerStyle', 'danger');
        $this->actingAs($this->firm)->post(route('messages.reply', $conversation), ['body' => 'Witam'])->assertSessionHas('flash.bannerStyle', 'danger');
        $this->assertSame(1, $conversation->messages()->count());

        // Pracownik nie może zaakceptować
        $this->actingAs($this->worker)->post(route('messages.accept', $conversation))->assertForbidden();

        $this->unlockAndAccept($conversation);
        Notification::assertSentTo($this->worker, ConversationAcceptedNotification::class);

        $this->actingAs($this->firm)->post(route('messages.reply', $conversation), ['body' => 'Zapraszamy'])->assertRedirect(route('messages.show', $conversation));
        $this->actingAs($this->worker)->post(route('messages.reply', $conversation), ['body' => 'Dziękuję'])->assertRedirect(route('messages.show', $conversation));
        $this->assertSame(3, $conversation->messages()->count());
    }

    public function test_employer_can_stop_accepting_messages_but_still_reply(): void
    {
        $this->start($this->firm);
        $conversation = $this->conversation($this->firm);
        $this->unlockAndAccept($conversation);

        $this->actingAs($this->firm)->patch(route('messages.settings'), ['messenger_online' => false, 'messenger_reply_hours' => 'pon.-pt. 8-16'])->assertRedirect();
        $this->assertFalse($this->firm->fresh()->messenger_online);

        $this->actingAs($this->worker)->post(route('messages.reply', $conversation), ['body' => 'Halo?'])->assertSessionHas('flash.bannerStyle', 'danger');
        $this->actingAs($this->firm)->post(route('messages.reply', $conversation), ['body' => 'Odpowiadam'])->assertSessionMissing('flash.bannerStyle');

        // Ustawienia ma tylko pracodawca
        $this->actingAs($this->worker)->patch(route('messages.settings'), ['messenger_online' => false])->assertForbidden();
    }

    public function test_blocking_for_24_hours_and_permanently(): void
    {
        $this->start($this->firm);
        $conversation = $this->conversation($this->firm);
        $this->unlockAndAccept($conversation);

        $this->actingAs($this->firm)->post(route('messages.block', $conversation), ['duration' => '24h'])->assertRedirect();
        $this->actingAs($this->worker)->post(route('messages.reply', $conversation), ['body' => 'Halo?'])
            ->assertSessionHas('flash.banner', __('messenger.denied.blocked'));
        $this->assertSame(MessengerService::STATE_BLOCKED, app(MessengerService::class)->contactStateFor($this->worker, $this->firm)['state']);

        $this->travel(25)->hours();
        $this->actingAs($this->worker)->post(route('messages.reply', $conversation), ['body' => 'Już mogę'])->assertSessionMissing('flash.bannerStyle');

        $this->actingAs($this->firm)->post(route('messages.block', $conversation), ['duration' => 'permanent']);
        $this->assertNull(ContactBlock::first()->blocked_until);

        $this->actingAs($this->firm)->delete(route('messages.unblock', $conversation));
        $this->assertSame(0, ContactBlock::count());
    }

    public function test_delete_hides_conversation_only_for_one_side(): void
    {
        $this->start($this->firm);
        $conversation = $this->conversation($this->firm);

        $this->actingAs($this->worker)->delete(route('messages.destroy', $conversation))->assertRedirect(route('messages.index'));

        $this->assertSame(0, Conversation::visibleFor($this->worker)->count());
        $this->assertSame(1, Conversation::visibleFor($this->firm)->count());
        $this->assertSame(1, $conversation->messages()->count());
    }

    public function test_outsiders_cannot_open_conversation(): void
    {
        $this->start($this->firm);
        $conversation = $this->conversation($this->firm);

        $this->actingAs($this->user('worker'))->get(route('messages.show', $conversation))->assertForbidden();
        $this->actingAs($this->recruiter)->get(route('messages.show', $conversation))->assertForbidden();
        $this->actingAs($this->user('worker'))->getJson(route('messages.typing-state', $conversation))->assertForbidden();
    }

    public function test_opening_and_polling_marks_messages_read(): void
    {
        $this->start($this->firm);
        $conversation = $this->conversation($this->firm);
        $messenger = app(MessengerService::class);

        $this->assertSame(1, $messenger->unreadCountFor($this->firm));
        $this->actingAs($this->firm)->getJson(route('messages.unread-count'))->assertJson(['unread_count' => 1]);

        $this->actingAs($this->firm)->post(route('messages.unlock', $conversation));

        $this->actingAs($this->firm)->getJson(route('messages.poll', ['conversation' => $conversation->id]))
            ->assertOk()
            ->assertJsonPath('activeConversation.id', $conversation->id)
            ->assertJsonPath('activeConversation.can_accept', true)
            ->assertJsonPath('conversations.0.participant.role', 'worker')
            ->assertJsonPath('unread_count', 0);

        $this->assertNotNull($conversation->messages()->first()->read_at);

        // Cudza rozmowa w odpytywaniu jest pomijana
        $this->actingAs($this->user('worker'))->getJson(route('messages.poll', ['conversation' => $conversation->id]))
            ->assertJsonPath('activeConversation', null);
    }

    public function test_typing_indicator(): void
    {
        $this->start($this->firm);
        $conversation = $this->conversation($this->firm);
        $this->unlockAndAccept($conversation);

        $this->actingAs($this->worker)->post(route('messages.typing', $conversation))->assertNoContent();
        $this->actingAs($this->firm)->getJson(route('messages.typing-state', $conversation))->assertJson(['typing' => true]);
        $this->actingAs($this->worker)->getJson(route('messages.typing-state', $conversation))->assertJson(['typing' => false]);

        // Wysłanie wiadomości kasuje "pisze..."
        $this->actingAs($this->worker)->post(route('messages.reply', $conversation), ['body' => 'Gotowe']);
        $this->actingAs($this->firm)->getJson(route('messages.typing-state', $conversation))->assertJson(['typing' => false]);
    }

    public function test_email_only_when_offline_and_once_per_cooldown(): void
    {
        // Firma online - tylko dzwonek
        $this->firm->forceFill(['last_seen_at' => now()])->save();
        $this->start($this->firm);
        Notification::assertSentTo($this->firm, NewMessageNotification::class, fn ($n, $channels) => $channels === ['database']);

        // Rekruter offline - mail i dzwonek
        Notification::fake();
        $this->start($this->recruiter);
        Notification::assertSentTo($this->recruiter, NewMessageNotification::class, fn ($n, $channels) => in_array('mail', $channels, true));

        // Kolejny mail z tej rozmowy dopiero po 30 minutach
        $conversation = $this->conversation($this->recruiter);
        $this->assertFalse(Cache::add("messenger:mail:{$conversation->id}:{$this->recruiter->id}", true, 60));
    }

    public function test_forbidden_words_are_rejected_for_users_but_not_for_admin(): void
    {
        $this->start($this->firm, 'Ty k.u.r.w.a')->assertSessionHasErrors('body');
        $this->assertSame(0, Conversation::count());

        $admin = $this->user('admin');
        $this->actingAs($admin)->post(route('messages.store-admin'), ['employer_id' => $this->firm->id, 'body' => 'Cytat zgłoszenia: kurwa'])->assertRedirect();
        $this->assertSame(1, Conversation::where('type', Conversation::TYPE_ADMIN)->count());
    }

    public function test_admin_inbox_with_firm(): void
    {
        $admin = $this->user('admin');
        $otherAdmin = $this->user('admin');

        $this->actingAs($admin)->post(route('messages.store-admin'), ['employer_id' => $this->firm->id, 'body' => 'Prosimy o uzupełnienie profilu.']);
        $conversation = Conversation::where('type', Conversation::TYPE_ADMIN)->firstOrFail();
        $this->assertFalse($conversation->isPending());
        Notification::assertSentTo($this->firm, NewMessageNotification::class);

        // Firma odpowiada od razu, a wiadomość widzą wszyscy admini
        $this->actingAs($this->firm)->post(route('messages.reply', $conversation), ['body' => 'Uzupełnione.'])->assertSessionMissing('flash.bannerStyle');
        $this->assertSame(1, app(MessengerService::class)->unreadCountFor($otherAdmin));
        $this->actingAs($otherAdmin)->get(route('messages.show', $conversation))->assertOk();

        // Firma nie może zablokować administracji; pracownik nie zakłada rozmowy administracji
        $this->actingAs($this->firm)->post(route('messages.block', $conversation), ['duration' => '24h'])->assertForbidden();
        $this->actingAs($this->worker)->post(route('messages.store-admin'), ['employer_id' => $this->firm->id, 'body' => 'x'])->assertForbidden();
        $this->actingAs($this->worker)->get(route('messages.show', $conversation))->assertForbidden();
    }

    public function test_guest_contact_goes_to_login_and_back_to_offer(): void
    {
        $project = $this->createProject($this->firm);

        $this->get(route('messages.contact', ['employer' => $this->firm->id, 'project' => $project->id]))->assertRedirect(route('login'));
        $this->assertSame(route('front.projects.single', $project).'?contact=1', session('url.intended'));

        $this->get(route('messages.contact', ['employer' => $this->firm->id, 'register' => 1]))->assertRedirect(route('register'));

        // Nie-pracodawca - 404
        $this->get(route('messages.contact', ['employer' => $this->worker->id]))->assertNotFound();
    }

    public function test_activity_and_language_are_remembered(): void
    {
        $this->assertNull($this->worker->last_seen_at);

        $this->actingAs($this->worker)->withSession(['language' => 'de'])->getJson(route('messages.unread-count'))->assertOk();

        $fresh = $this->worker->fresh();
        $this->assertNotNull($fresh->last_seen_at);
        $this->assertSame('de', $fresh->locale);
        $this->assertTrue($fresh->isOnline());
    }

    public function test_messages_page_renders_for_each_role(): void
    {
        $this->start($this->firm);
        $conversation = $this->conversation($this->firm);

        foreach ([$this->worker, $this->firm] as $user) {
            $this->actingAs($user)->get(route('messages.show', $conversation))
                ->assertOk()
                ->assertInertia(fn ($page) => $page->component('Messages/Index')->where('activeConversation.id', $conversation->id));
        }

        $this->actingAs($this->recruiter)->get(route('messages.index'))->assertOk();
        $this->actingAs($this->user('admin'))->get(route('messages.index'))->assertOk();
    }

    public function test_firm_can_preview_its_recruiters_conversations_read_only(): void
    {
        $this->start($this->recruiter, 'Dzień dobry, pytam o ofertę rekrutera.');
        $conversation = $this->conversation($this->recruiter);

        // Lista rozmów rekruterów firmy
        $this->actingAs($this->firm)->get(route('messages.index', ['view' => 'recruiters']))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->where('canOversee', true)
                ->where('view', 'recruiters')
                ->has('conversations', 1)
                ->where('conversations.0.recruiter_name', $this->recruiter->name)
                ->where('conversations.0.participant.role', 'worker'));

        // Podgląd: wiadomości widoczne, bez akcji, bez oznaczania jako przeczytane
        $this->actingAs($this->firm)->get(route('messages.show', $conversation))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->where('view', 'recruiters')
                ->where('activeConversation.oversight', true)
                ->where('activeConversation.recruiter.id', $this->recruiter->id)
                ->where('activeConversation.locked', true)
                ->where('activeConversation.unlock.can_unlock', false)
                ->where('activeConversation.can_reply', false)
                ->where('activeConversation.can_accept', false)
                ->where('activeConversation.can_delete', false)
                ->where('activeConversation.can_block', false));
        $this->actingAs($this->firm)->getJson(route('messages.poll', ['conversation' => $conversation->id]))->assertJsonPath('activeConversation.oversight', true);
        $this->assertNull($conversation->messages()->first()->read_at);

        // Firma nie odpowiada, nie akceptuje, nie usuwa ani nie blokuje w imieniu rekrutera
        $this->actingAs($this->firm)->post(route('messages.reply', $conversation), ['body' => 'Odpowiem za rekrutera'])->assertSessionHas('flash.bannerStyle', 'danger');
        $this->actingAs($this->firm)->post(route('messages.accept', $conversation))->assertForbidden();
        $this->actingAs($this->firm)->delete(route('messages.destroy', $conversation))->assertForbidden();
        $this->actingAs($this->firm)->post(route('messages.block', $conversation), ['duration' => '24h'])->assertForbidden();
        $this->assertSame(1, $conversation->messages()->count());

        // Inna firma i rekruter innej firmy nie mają podglądu
        $this->actingAs($this->user('firm'))->get(route('messages.show', $conversation))->assertForbidden();
    }

    public function test_message_from_new_worker_is_locked_until_employer_pays(): void
    {
        $this->start($this->firm, 'Tajna treść wiadomości');
        $conversation = $this->conversation($this->firm);

        // Przed opłatą: imię i oferta widoczne, treść nigdzie
        $this->actingAs($this->firm)->get(route('messages.show', $conversation))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->where('activeConversation.locked', true)
                ->where('activeConversation.participant.name', $this->worker->name)
                ->where('activeConversation.unlock.price', 120)
                ->where('activeConversation.unlock.points', 1000)
                ->where('activeConversation.unlock.can_unlock', true)
                ->where('activeConversation.can_accept', false)
                ->has('activeConversation.messages', 1)
                ->where('activeConversation.messages.0.body', null)
                ->where('conversations.0.locked', true)
                ->where('conversations.0.last_message.body', null));
        $poll = $this->actingAs($this->firm)->getJson(route('messages.poll', ['conversation' => $conversation->id]))->assertOk();
        $this->assertStringNotContainsString('Tajna treść', $poll->getContent());
        // Otwarcie zablokowanej rozmowy nie oznacza wiadomości jako przeczytanej
        $this->assertNull($conversation->messages()->first()->read_at);
        $this->actingAs($this->firm)->post(route('messages.accept', $conversation))->assertForbidden();
        // Pracownik zawsze widzi swoją wiadomość
        $this->actingAs($this->worker)->getJson(route('messages.poll', ['conversation' => $conversation->id]))
            ->assertJsonPath('activeConversation.messages.0.body', 'Tajna treść wiadomości');

        // Odczytanie: 120 pkt z konta firmy, wpis w historii punktów
        $this->actingAs($this->firm)->post(route('messages.unlock', $conversation))->assertSessionHas('flash.bannerStyle', 'success');
        $this->assertSame(880, $this->firm->firm->fresh()->points);
        $this->assertDatabaseHas('point_histories', ['user_id' => $this->firm->id, 'action_name' => 'OpenMessage', 'points' => 120]);
        $this->assertNotNull($conversation->fresh()->unlocked_at);

        // Drugie kliknięcie i kolejne wiadomości w tej rozmowie są bezpłatne
        $this->actingAs($this->firm)->post(route('messages.unlock', $conversation))->assertForbidden();
        $this->actingAs($this->firm)->post(route('messages.accept', $conversation))->assertRedirect();
        $this->actingAs($this->worker)->post(route('messages.reply', $conversation), ['body' => 'Druga wiadomość']);
        $this->assertSame(880, $this->firm->firm->fresh()->points);
        $this->actingAs($this->firm)->getJson(route('messages.poll', ['conversation' => $conversation->id]))
            ->assertJsonPath('activeConversation.messages.0.body', 'Tajna treść wiadomości');

        // Kolejny nowy pracownik - kolejna opłata
        $other = $this->user('worker');
        $this->actingAs($other)->post(route('messages.store'), ['employer_id' => $this->firm->id, 'body' => 'Ja też']);
        $second = Conversation::where('worker_id', $other->id)->firstOrFail();
        $this->actingAs($this->firm)->post(route('messages.unlock', $second));
        $this->assertSame(760, $this->firm->firm->fresh()->points);
    }

    public function test_not_enough_points_and_recruiter_pays_with_firm_points(): void
    {
        $this->firm->firm->update(['points' => 50]);
        $this->start($this->recruiter);
        $conversation = $this->conversation($this->recruiter);

        $this->actingAs($this->recruiter)->post(route('messages.unlock', $conversation))
            ->assertSessionHas('flash.banner', __('messenger.noPoints'));
        $this->assertNull($conversation->fresh()->unlocked_at);
        $this->assertSame(50, $this->firm->firm->fresh()->points);

        // Blokada i usunięcie bez płacenia
        $this->actingAs($this->recruiter)->post(route('messages.block', $conversation), ['duration' => '24h'])->assertRedirect();
        $this->actingAs($this->recruiter)->delete(route('messages.destroy', $conversation))->assertRedirect();

        // Rekruter płaci punktami swojej firmy
        $this->firm->firm->update(['points' => 500]);
        $other = $this->user('worker');
        $this->actingAs($other)->post(route('messages.store'), ['employer_id' => $this->recruiter->id, 'body' => 'Dzień dobry']);
        $second = Conversation::where('worker_id', $other->id)->firstOrFail();
        $this->actingAs($this->recruiter)->post(route('messages.unlock', $second))->assertSessionHas('flash.bannerStyle', 'success');
        $this->assertSame(380, $this->firm->firm->fresh()->points);
    }

    public function test_email_does_not_reveal_locked_message(): void
    {
        $this->start($this->firm, 'Tajna treść wiadomości');
        $message = $this->conversation($this->firm)->messages()->first();

        $html = (string) (new NewMessageNotification($message))->toMail($this->firm)->render();

        $this->assertStringNotContainsString('Tajna treść', $html);
        $this->assertStringContainsString(e(__('messenger.mail.lockedHint')), $html);
    }

    public function test_unlock_price_is_a_separate_operation_in_admin_price_list(): void
    {
        $this->actingAs($this->user('admin'))->get(route('admin.admin-points.index'))
            ->assertOk()
            ->assertInertia(fn ($page) => $page->where('operations', fn ($operations) => collect($operations)
                ->contains(fn ($operation) => $operation['id'] === 'OpenMessage' && $operation['points'] === 120)));
    }
}
