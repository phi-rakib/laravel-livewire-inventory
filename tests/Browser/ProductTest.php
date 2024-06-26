<?php

namespace Tests\Browser;

use App\Models\Product;
use Illuminate\Foundation\Testing\DatabaseTruncation;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ProductTest extends DuskTestCase
{
    use DatabaseTruncation;

    public function test_index()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('products.index')
                ->assertSee('Create Product');
        });
    }

    public function test_create()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('products.index')
                ->clickLink('Create Product')
                ->type('#name', 'Test Product')
                ->type('#price', '100')
                ->press('Create')
                ->waitForText('Product created successfully.')
                ->assertsee('Test Product');
        });
    }

    public function test_update()
    {
        Product::factory()->create();

        $this->browse(function (Browser $browser) {
            $browser->visitRoute('products.index')
                ->clickLink('Edit')
                ->type('#name', 'Updated Product')
                ->type('#price', '200')
                ->press('Update')
                ->waitForText('Product updated successfully!')
                ->assertsee('Updated Product');
        });
    }

    public function test_delete()
    {
        $product = Product::factory()->create();

        $this->browse(function (Browser $browser) use ($product) {
            $browser->visitRoute('products.index')
                ->press('Delete')
                ->waitUntilMissingText($product->name);
        });
    }
}
