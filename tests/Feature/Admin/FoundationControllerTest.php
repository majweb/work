<?php

namespace Tests\Feature\Admin;

use App\Models\Foundation;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FoundationControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_cannot_delete_foundation_with_invoices(): void
    {
        $admin = User::factory()->create();
        $this->actingAs($admin);

        $foundation = Foundation::create([
            'name' => 'Test Foundation',
            'country' => 'PL',
            'iban' => '123',
            'swift' => 'ABC',
            'krs' => '0000123456',
            'latitude' => 52.2297,
            'longitude' => 21.0122,
        ]);

        $foundation->invoice()->create([
            'user_id' => $admin->id,
            'number' => '1/2026',
            'day' => 6,
            'month' => 5,
            'year' => 2026,
            'amount' => '100.00',
            'pdf' => 'test.pdf',
        ]);

        $response = $this->delete(route('admin.foundations.destroy', $foundation));

        $response->assertStatus(302);
        $this->assertDatabaseHas('foundations', ['id' => $foundation->id]);
    }
}
