<?php

namespace App\Http\Controllers;

use App\Mail\MissingPositionReplyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class NotificationsController extends Controller
{
    /**
     * Wyświetla listę powiadomień zalogowanego użytkownika.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        $user = Auth::user();
        $notifications = $user->notifications()->paginate(10);

        // Przygotowanie danych powiadomień - zostawiamy tłumaczenie frontendowi
        $formattedNotifications = $notifications->through(function ($notification) {
            $data = $notification->data;

            // Ustaw domyślne klucze, jeśli nie istnieją (dla starych powiadomień)
            if (! isset($data['title'])) {
                $data['title'] = 'translate.newNotification';
            }

            if (! isset($data['message']) && isset($data['aplication'])) {
                $data['message'] = 'translate.applicationNotificationMessage';
            }

            $notification->data = $data;

            return $notification;
        });

        return Inertia::render('Notifications/Index', [
            'notifications' => $formattedNotifications,
        ]);
    }

    /**
     * Oznacza powiadomienie jako przeczytane.
     */
    public function markAsRead(Request $request, string $id)
    {
        $notification = Auth::user()->notifications()->findOrFail($id);
        $notification->markAsRead();
    }

    /**
     * Oznacza wszystkie powiadomienia jako przeczytane.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function markAllAsRead(Request $request)
    {
        Auth::user()->unreadNotifications->markAsRead();

        return redirect()->back();
    }

    /**
     * Pobiera liczbę nieprzeczytanych powiadomień.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCount()
    {
        $unreadCount = Auth::user()->unreadNotifications()->count();

        return redirect()->back();
    }

    /**
     * Wysyła e-mail w odpowiedzi na zgłoszenie brakującego stanowiska.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function replyEmail(Request $request)
    {
        $validated = $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'notification_id' => 'required|exists:notifications,id',
        ]);

        $notification = Auth::user()->notifications()->findOrFail($validated['notification_id']);

        $recipient = $notification->data['user_email'] ?? null;

        if (! $recipient) {
            // Próba znalezienia użytkownika po ID, jeśli e-mail nie został zapisany w powiadomieniu
            $userId = $notification->data['firm_id'] ?? null;
            if ($userId) {
                $user = \App\Models\User::find($userId);
                $recipient = $user?->email;
            }

            if (! $recipient) {
                // Próba znalezienia użytkownika po imieniu/nazwisku
                $userName = $notification->data['user_name'] ?? null;
                if ($userName) {
                    $user = \App\Models\User::where('name', $userName)->first();
                    $recipient = $user?->email;
                }
            }
        }

        // Jeśli nadal brak, szukamy w powiązaniach (powiadomienia systemowe są wysyłane DO adminów, więc notifiable to admin)
        // Ale dane powiadomienia powinny zawierać info o zgłaszającym.

        $recipient = $recipient ?? 'kontakt@work4you.global'; // Ostateczny fallback

        Mail::to($recipient)->send(new MissingPositionReplyMail($validated['subject'], $validated['message']));

        // Pobieramy dane identyfikacyjne zgłoszenia
        $notificationData = $notification->data;
        $type = $notificationData['type'] ?? null;
        $content = $notificationData['content'] ?? null;
        $firmId = $notificationData['firm_id'] ?? null;
        $createdAt = $notification->created_at;

        // Jeśli to powiadomienie o brakującym stanowisku, aktualizujemy status u wszystkich adminów dla tego konkretnego zgłoszenia
        if ($type === 'missing_position' && $content && $firmId) {
            // Wyszukujemy wszystkie powiadomienia o tym samym typie, treści i ID firmy, wysłane w tym samym czasie
            $relatedNotifications = \Illuminate\Notifications\DatabaseNotification::where('data->type', 'missing_position')
                ->where('data->content', $content)
                ->where('data->firm_id', $firmId)
                ->whereBetween('created_at', [
                    $createdAt->copy()->subSecond(),
                    $createdAt->copy()->addSecond(),
                ])
                ->get();

            foreach ($relatedNotifications as $relatedNotification) {
                $data = $relatedNotification->data;
                $data['email_sent'] = true;
                $data['email_sent_at'] = now()->toDateTimeString();
                $data['email_sent_count'] = ($data['email_sent_count'] ?? 0) + 1;
                $relatedNotification->data = $data;
                $relatedNotification->save();
            }
        } else {
            // Fallback dla pojedynczego powiadomienia (jeśli dane nie pasują do wzorca lub to inny typ)
            $data = $notification->data;
            $data['email_sent'] = true;
            $data['email_sent_at'] = now()->toDateTimeString();
            $data['email_sent_count'] = ($data['email_sent_count'] ?? 0) + 1;
            $notification->data = $data;
            $notification->save();
        }

        session()->flash('flash.banner', 'E-mail został wysłany i status został zaktualizowany u wszystkich administratorów.');
        session()->flash('flash.bannerStyle', 'success');

        return back();
    }
}
