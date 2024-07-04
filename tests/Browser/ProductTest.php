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
        $product = Product::factory()->create();

        $this->browse(function (Browser $browser) use ($product) {
            $browser->visit(route('products.index'))
                ->assertSee('Product Index')
                ->assertSee($product->name);
        });
    }

    public function test_create()
    {
        $product = Product::factory()->make();

        $this->browse(function (Browser $browser) use ($product) {
            $browser->visit(route('products.index'))
                ->clickLink('Create Product')
                ->type('#form\.name', $product->name)
                ->type('#form\.price', $product->price)
                ->select('#form\.category_id', $product->category_id)
                ->select('#form\.brand_id', $product->brand_id)
                ->press('Create')
                ->waitForText('Product created successfully.')
                ->assertSee($product->name);
        });
    }

    public function test_update()
    {
        $product = Product::factory()->create();
        $updatedProduct = Product::factory()->make();

        $this->browse(function (Browser $browser) use ($product, $updatedProduct) {
            $browser->visit(route('products.index'))
                ->assertSee($product->name)
                ->clickLink('Edit')
                ->assertInputValue('#form\.name', $product->name)
                ->assertInputValue('#form\.price', $product->price)
                ->assertSelected('#form\.category_id', $product->category_id)
                ->assertSelected('#form\.brand_id', $product->brand_id)
                ->type('#form\.name', $updatedProduct->name)
                ->type('#form\.price', $updatedProduct->price)
                ->select('#form\.category_id', $updatedProduct->category_id)
                ->select('#form\.brand_id', $updatedProduct->brand_id)
                ->press('Update')
                ->waitForText('Product updated successfully!')
                ->assertSee($updatedProduct->name);
        });
    }

    public function test_delete()
    {
        $product = Product::factory()->create();

        $this->browse(function (Browser $browser) use ($product) {
            $browser->visit(route('products.index'))
                ->assertSee($product->name)
                ->press('Delete')
                ->waitUntilMissingText($product->name)
                ->assertDontSee($product->name);
        });
    }
}
