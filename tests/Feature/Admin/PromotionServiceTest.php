<?php

namespace Tests\Feature\Admin;

use App\Enum\ProductType;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class PromotionServiceTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected function setUp(): void
    {
        parent::setUp();

        Role::create(['name' => 'admin']);
        $this->admin = User::factory()->create();
        $this->admin->assignRole('admin');
    }

    public function test_admin_can_see_promotion_services_list(): void
    {
        Product::factory()->create([
            'product_type' => ProductType::EXTRA,
            'name' => ['pl' => 'Usługa testowa'],
            'price' => 100,
        ]);

        Product::factory()->create([
            'product_type' => ProductType::POINTS,
            'name' => ['pl' => 'Punkty'],
        ]);

        $response = $this->actingAs($this->admin)
            ->get(route('admin.promotion-services.index'));

        $response->assertStatus(200);
        $response->assertInertia(fn ($page) => $page
            ->component('Admin/Marketing/PromotionServices/Index')
            ->has('products', 1)
            ->where('products.0.name', 'Usługa testowa')
            ->where('products.0.price', '100.00')
            ->where('products.0.duration', '30 dni')
        );
    }

    public function test_admin_can_see_edit_promotion_service_page(): void
    {
        $product = Product::factory()->create([
            'product_type' => ProductType::EXTRA,
            'name' => ['pl' => 'Usługa do edycji'],
            'price' => 200,
        ]);

        $response = $this->actingAs($this->admin)
            ->get(route('admin.promotion-services.edit', $product));

        $response->assertStatus(200);
        $response->assertInertia(fn ($page) => $page
            ->component('Admin/Marketing/PromotionServices/Edit')
            ->where('promotion_service.id', $product->id)
            ->where('promotion_service.name.pl', 'Usługa do edycji')
            ->where('promotion_service.price', '200.00')
            ->has('langs')
        );
    }

    public function test_admin_cannot_update_promotion_service_with_invalid_data(): void
    {
        $product = Product::factory()->create([
            'product_type' => ProductType::EXTRA,
            'name' => ['pl' => 'Test Service'],
        ]);

        $response = $this->actingAs($this->admin)
            ->put(route('admin.promotion-services.update', $product), [
                'name' => [
                    'pl' => '', // Required
                    'en' => str_repeat('a', 256), // Max 255
                ],
                'price' => -1, // Min 0
                'active' => 'not-a-boolean',
            ]);

        $response->assertSessionHasErrors(['name.pl', 'name.en', 'price', 'active']);
    }

    public function test_admin_can_update_promotion_service(): void
    {
        $product = Product::factory()->create([
            'product_type' => ProductType::EXTRA,
            'name' => ['pl' => 'Stara nazwa', 'en' => 'Old name'],
            'price' => 100,
            'active' => true,
        ]);

        $response = $this->actingAs($this->admin)
            ->put(route('admin.promotion-services.update', $product), [
                'name' => ['pl' => 'Nowa nazwa', 'en' => 'New name', 'de' => 'Neuer Name'],
                'price' => 150,
                'active' => false,
            ]);

        $response->assertRedirect(route('admin.promotion-services.index'));

        $product->refresh();
        $this->assertEquals('Nowa nazwa', $product->getTranslation('name', 'pl'));
        $this->assertEquals('New name', $product->getTranslation('name', 'en'));
        $this->assertEquals('Neuer Name', $product->getTranslation('name', 'de'));
        $this->assertEquals(150, $product->price);
        $this->assertFalse($product->active);
    }

    public function test_admin_can_see_article_promotion_service_with_unlimited_duration(): void
    {
        Product::factory()->create([
            'id' => 10,
            'product_type' => ProductType::EXTRA,
            'name' => ['pl' => 'Jakakolwiek nazwa', 'en' => 'Any name'],
        ]);

        $response = $this->actingAs($this->admin)
            ->get(route('admin.promotion-services.index'));

        $response->assertStatus(200);
        $response->assertInertia(fn ($page) => $page
            ->component('Admin/Marketing/PromotionServices/Index')
            ->where('products.0.duration', 'Nielimitowany')
        );
    }

    public function test_admin_can_toggle_promotion_service_status(): void
    {
        $product = Product::factory()->create([
            'product_type' => ProductType::EXTRA,
            'active' => true,
        ]);

        $response = $this->actingAs($this->admin)
            ->put(route('admin.promotion-services.toggle', $product));

        $response->assertRedirect();
        $this->assertFalse($product->fresh()->active);
    }

    public function test_admin_can_update_promotion_service_with_empty_non_pl_names(): void
    {
        $product = Product::factory()->create([
            'product_type' => ProductType::EXTRA,
            'name' => ['pl' => 'Nazwa PL', 'en' => 'Name EN'],
            'price' => 100,
            'active' => true,
        ]);

        $response = $this->actingAs($this->admin)
            ->put(route('admin.promotion-services.update', $product), [
                'name' => [
                    'pl' => 'Nowa nazwa PL',
                    'en' => '', // Should be allowed
                    'de' => '', // Should be allowed
                ],
                'price' => 150,
                'active' => true,
            ]);

        $response->assertRedirect(route('admin.promotion-services.index'));
        $response->assertSessionHasNoErrors();

        $product->refresh();
        $this->assertEquals('Nowa nazwa PL', $product->getTranslation('name', 'pl'));
        // Sprawdzamy czy en jest puste lub usunięte (zależy od implementacji spatie/laravel-translatable)
        $this->assertEmpty($product->getTranslation('name', 'en'));
    }
}
