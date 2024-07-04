<?php

namespace Tests\Browser;

use App\Models\Brand;
use Illuminate\Foundation\Testing\DatabaseTruncation;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class BrandTest extends DuskTestCase
{
    use DatabaseTruncation;

    public function test_index()
    {
        $brand = Brand::factory()->create();

        $this->browse(function (Browser $browser) use ($brand) {
            $browser->visit(route('brands.index'))
                ->assertSee('Brand Index')
                ->assertSee($brand->name);
        });
    }

    public function test_create()
    {
        $brand = Brand::factory()->make();

        $this->browse(function (Browser $browser) use ($brand) {
            $browser->visit(route('brands.index'))
                ->assertSee('Brand Index')
                ->clickLink('Create Brand')
                ->waitForText('Brand Create')
                ->type('#form\.name', $brand->name)
                ->press('Create')
                ->waitForText('Brand created successfully')
                ->assertSee($brand->name);
        });
    }

    public function test_update()
    {
        $brand = Brand::factory()->create();
        $updatedBrand = Brand::factory()->make();

        $this->browse(function (Browser $browser) use ($brand, $updatedBrand) {
            $browser->visit(route('brands.index'))
                ->assertSee($brand->name)
                ->clickLink('Edit')
                ->waitForText('Brand Edit')
                ->assertInputValue('#form\.name', $brand->name)
                ->type('#form\.name', $updatedBrand->name)
                ->press('Update')
                ->waitForText('Brand updated successfully')
                ->assertSee($updatedBrand->name);
        });
    }

    public function test_delete()
    {
        $brand = Brand::factory()->create();

        $this->browse(function (Browser $browser) use ($brand) {
            $browser->visit(route('brands.index'))
                ->assertSee($brand->name)
                ->press('Delete')
                ->assertDialogOpened('Are you sure that you want to delete it?')
                ->acceptDialog()
                ->waitUntilMissingText($brand->name)
                ->assertDontSee($brand->name);
        });
    }
}
