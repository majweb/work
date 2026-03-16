<?php

namespace Tests\Feature\Admin;

use App\Mail\InvoiceCorrectionMail;
use App\Models\Firm;
use App\Models\Invoice;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class InvoiceCorrectionTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(\Database\Seeders\RoleSeeder::class);
        $this->user = User::factory()->create();
        $this->user->assignRole('admin');
        $this->actingAs($this->user);
    }

    public function test_can_only_create_correction_for_invoice_from_current_month(): void
    {
        // Faktura z poprzedniego miesiąca
        $oldInvoice = Invoice::factory()->create([
            'date_invoice' => Carbon::now()->subMonth(),
            'user_id' => $this->user->id,
        ]);

        $response = $this->get(route('admin.finance.invoices.correction.create', $oldInvoice));
        $response->assertRedirect(route('admin.finance.invoices.index'));
        $response->assertSessionHas('error', 'Korekta jest możliwa tylko dla faktur wystawionych w obecnym miesiącu.');

        // Faktura z obecnego miesiąca
        $currentInvoice = Invoice::factory()->create([
            'date_invoice' => Carbon::now(),
            'user_id' => $this->user->id,
        ]);

        $response = $this->get(route('admin.finance.invoices.correction.create', $currentInvoice));
        $response->assertStatus(200);
    }

    public function test_store_correction_redirects_to_invoices_index(): void
    {
        $user = User::factory()->create();
        $user->assignRole('admin');
        Firm::factory()->create([
            'user_id' => $user->id,
            'countryJson' => ['countryCode' => 'de'],
        ]);

        $invoice = Invoice::factory()->create([
            'date_invoice' => Carbon::now(),
            'user_id' => $user->id,
        ]);

        $data = [
            'number' => 'COR/001/'.now()->format('m/Y'),
            'date_correction' => now()->toDateString(),
            'date_invoice' => $invoice->date_invoice->toDateString(),
            'amount' => '100.00',
            'reason' => 'Test',
            'name_invoice' => 'Firm',
            'nip_invoice' => '1234567890',
            'street_invoice' => 'Street',
            'postal_invoice' => '00-000',
            'city_invoice' => 'City',
            'country_invoice' => 'Country',
        ];

        Mail::fake();
        Storage::fake('invoices');

        $response = $this->actingAs($user)->post(route('admin.finance.invoices.correction.store', $invoice), $data);

        $response->assertRedirect(route('admin.finance.invoices.index'));
        $response->assertSessionHas('flash.banner', 'Korekta została wystawiona.');

        Mail::assertQueued(InvoiceCorrectionMail::class, function ($mail) use ($user) {
            return $mail->hasTo($user->email) && $mail->locale === 'de';
        });
    }

    public function test_validation_uses_polish_attributes(): void
    {
        $invoice = Invoice::factory()->create([
            'date_invoice' => Carbon::now(),
            'user_id' => $this->user->id,
        ]);

        $response = $this->post(route('admin.finance.invoices.correction.store', $invoice), []);

        $response->assertSessionHasErrors([
            'number',
            'date_correction',
            'date_invoice',
            'amount',
            'name_invoice',
            'nip_invoice',
            'street_invoice',
            'postal_invoice',
            'city_invoice',
            'country_invoice',
        ]);
    }

    public function test_can_delete_correction_from_current_month(): void
    {
        $invoice = Invoice::factory()->create(['date_invoice' => now()]);
        $correction = $invoice->corrections()->create([
            'number' => 'COR/001/03/2026',
            'date_correction' => now(),
            'date_invoice' => now(),
            'amount' => '100.00',
            'pdf' => 'test.pdf',
            'name_invoice' => 'Test',
            'nip_invoice' => '123',
            'street_invoice' => 'Street',
            'postal_invoice' => '00-000',
            'city_invoice' => 'City',
            'country_invoice' => 'Country',
        ]);

        Storage::disk('invoices')->put('test.pdf', 'content');

        $response = $this->delete(route('admin.finance.corrections.destroy', $correction));

        $response->assertRedirect();
        $response->assertSessionHas('flash.banner', 'Korekta została usunięta.');
        $this->assertDatabaseMissing('invoice_corrections', ['id' => $correction->id]);
        Storage::disk('invoices')->assertMissing('test.pdf');
    }

    public function test_cannot_delete_correction_from_previous_month(): void
    {
        $invoice = Invoice::factory()->create(['date_invoice' => now()->subMonth()]);
        $correction = $invoice->corrections()->create([
            'number' => 'COR/001/02/2026',
            'date_correction' => now()->subMonth(),
            'date_invoice' => now()->subMonth(),
            'amount' => '100.00',
            'pdf' => 'old.pdf',
            'name_invoice' => 'Test',
            'nip_invoice' => '123',
            'street_invoice' => 'Street',
            'postal_invoice' => '00-000',
            'city_invoice' => 'City',
            'country_invoice' => 'Country',
        ]);

        $response = $this->delete(route('admin.finance.corrections.destroy', $correction));

        $response->assertRedirect();
        $response->assertSessionHas('error', 'Można usuwać tylko korekty wystawione w obecnym miesiącu.');
        $this->assertDatabaseHas('invoice_corrections', ['id' => $correction->id]);
    }
}
