<?php

namespace Tests\Feature\Security;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class RecruitAccountTakeoverTest extends TestCase
{
    use RefreshDatabase;

    private User $firmA;

    private User $firmB;

    protected function setUp(): void
    {
        parent::setUp();
        foreach (['firm', 'recruit', 'admin'] as $role) {
            Role::firstOrCreate(['name' => $role]);
        }

        $this->firmA = User::factory()->create();
        $this->firmA->assignRole('firm');
        $this->firmB = User::factory()->create();
        $this->firmB->assignRole('firm');
    }

    private function recruitOf(User $firm): User
    {
        $recruit = User::factory()->create(['recruiter_from_firm_id' => $firm->id]);
        $recruit->assignRole('recruit');

        return $recruit;
    }

    private function updatePayload(User $target): array
    {
        return [
            'id' => $target->id,
            'name' => 'Przejęte',
            'email' => 'attacker@example.com',
            'recruiter_phone' => '123456789',
            'color' => '#000000',
            'user_blocked' => false,
            'password' => 'NoweHaslo123!',
            'password_confirmation' => 'NoweHaslo123!',
        ];
    }

    public function test_firm_cannot_update_admin_account(): void
    {
        $admin = User::factory()->create(['email' => 'admin@example.com']);
        $admin->assignRole('admin');

        $this->actingAs($this->firmA)
            ->put(route('recruits.update', $admin), $this->updatePayload($admin))
            ->assertForbidden();

        $this->assertSame('admin@example.com', $admin->fresh()->email);
    }

    public function test_firm_cannot_update_or_delete_other_firms_recruit(): void
    {
        $recruitB = $this->recruitOf($this->firmB);

        $this->actingAs($this->firmA)->get(route('recruits.edit', $recruitB))->assertForbidden();
        $this->actingAs($this->firmA)->put(route('recruits.update', $recruitB), $this->updatePayload($recruitB))->assertForbidden();
        $this->actingAs($this->firmA)->delete(route('recruits.photo.destroy', $recruitB))->assertForbidden();
        $this->actingAs($this->firmA)->delete(route('recruits.destroy', $recruitB))->assertForbidden();

        $this->assertNotNull($recruitB->fresh());
        $this->assertSame($this->firmB->id, (int) $recruitB->fresh()->recruiter_from_firm_id);
    }

    public function test_firm_can_manage_own_recruit(): void
    {
        $recruitA = $this->recruitOf($this->firmA);

        $this->actingAs($this->firmA)
            ->put(route('recruits.update', $recruitA), $this->updatePayload($recruitA))
            ->assertSessionHasNoErrors();
        $this->assertSame('Przejęte', $recruitA->fresh()->name);

        $this->actingAs($this->firmA)->delete(route('recruits.destroy', $recruitA))->assertRedirect(route('recruits.index'));
        $this->assertNull(User::find($recruitA->id));
    }
}
