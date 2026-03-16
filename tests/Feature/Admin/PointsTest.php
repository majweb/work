<?php

namespace Tests\Feature\Admin;

use App\Enum\ProductType;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class PointsTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected function setUp(): void
    {
        parent::setUp();

        if (!Role::where('name', 'admin')->exists()) {
            Role::create(['name' => 'admin']);
        }
        $this->admin = User::factory()->create();
        $this->admin->assignRole('admin');
    }

    public function test_admin_can_see_points_list(): void
    {
        Product::factory()->create([
            'product_type' => ProductType::POINTS,
            'name' => ['pl' => 'Pakiet 100 punktów'],
            'points' => 100,
            'price' => 10,
        ]);

        $response = $this->actingAs($this->admin)
            ->get(route('admin.points.index'));

        $response->assertStatus(200);
        $response->assertInertia(fn ($page) => $page
            ->component('Admin/Marketing/Points/Index')
            ->has('operations')
            ->has('products', 1)
            ->where('products.0.name', 'Pakiet 100 punktów')
            ->where('products.0.points', 100)
        );
    }

    public function test_admin_can_see_edit_points_page(): void
    {
        $product = Product::factory()->create([
            'product_type' => ProductType::POINTS,
            'name' => ['pl' => 'Pakiet do edycji'],
            'points' => 500,
        ]);

        $response = $this->actingAs($this->admin)
            ->get(route('admin.points.edit', $product));

        $response->assertStatus(200);
        $response->assertInertia(fn ($page) => $page
            ->component('Admin/Marketing/Points/Edit')
            ->where('product.id', $product->id)
            ->where('product.points', 500)
        );
    }

    public function test_admin_can_update_product_points_and_price(): void
    {
        $product = Product::factory()->create([
            'product_type' => ProductType::POINTS,
            'points' => 100,
            'price' => 10,
        ]);

        $response = $this->actingAs($this->admin)
            ->put(route('admin.points.update', $product), [
                'points' => 250,
                'price' => 25,
            ]);

        $response->assertRedirect();
        $product->refresh();
        $this->assertEquals(250, $product->points);
        $this->assertEquals(25, $product->price);
    }

    public function test_admin_can_update_operation_points(): void
    {
        $initialConfig = config('getPoints');
        $key = array_key_first($initialConfig);
        $newValue = $initialConfig[$key] + 50;

        $response = $this->actingAs($this->admin)
            ->put(route('admin.points.update-operation', $key), [
                'points' => $newValue,
            ]);

        $response->assertRedirect();

        // Refresh config
        $updatedConfig = include config_path('getPoints.php');
        $this->assertEquals($newValue, $updatedConfig[$key]);

        // Reset config back to original for other tests
        $initialConfig[$key] = $initialConfig[$key]; // already changed in file if it worked
        $content = "<?php\n\nreturn ".var_export($initialConfig, true).";\n";
        file_put_contents(config_path('getPoints.php'), $content);
    }

    public function test_admin_can_restore_operation_points(): void
    {
        $initialConfig = config('getPoints');
        $key = array_key_first($initialConfig);
        // Ensure we pick a key that has a default value (not a _default key itself)
        if (str_ends_with($key, '_default')) {
            $key = 'OpenAppWithPdf';
        }

        $defaultValue = $initialConfig[$key . '_default'];

        // First change it
        $this->actingAs($this->admin)
            ->put(route('admin.points.update-operation', $key), [
                'points' => $defaultValue + 100,
            ]);

        $this->assertEquals($defaultValue + 100, (include config_path('getPoints.php'))[$key]);

        // Then restore it
        $response = $this->actingAs($this->admin)
            ->put(route('admin.points.restore-operation', $key));

        $response->assertRedirect();

        $updatedConfig = include config_path('getPoints.php');
        $this->assertEquals($defaultValue, $updatedConfig[$key]);
    }

    public function test_admin_can_toggle_points_product_status(): void
    {
        $product = Product::factory()->create([
            'product_type' => ProductType::POINTS,
            'active' => true,
        ]);

        $response = $this->actingAs($this->admin)
            ->put(route('admin.points.toggle', $product));

        $response->assertRedirect();
        $this->assertFalse($product->fresh()->active);
    }
}
