<?php

namespace Tests\Browser;

use App\Models\Category;
use Illuminate\Foundation\Testing\DatabaseTruncation;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CategoryTest extends DuskTestCase
{
    use DatabaseTruncation;

    public function test_index()
    {
        $category = Category::factory()->create();

        $this->browse(function (Browser $browser) use ($category) {
            $browser->visit(route('categories.index'))
                ->assertSee('Category Index')
                ->assertSee($category->name);
        });
    }

    public function test_create()
    {
        $category = Category::factory()->make();

        $this->browse(function (Browser $browser) use ($category) {
            $browser->visit(route('categories.index'))
                ->clickLink('Create Category')
                ->waitForText('Category Create')
                ->type('#form\.name', $category->name)
                ->press('Create')
                ->waitForText('Category created successfully')
                ->assertsee($category->name);
        });
    }

    public function test_update()
    {
        $category = Category::factory()->create();
        $updatedCategory = Category::factory()->make();

        $this->browse(function (Browser $browser) use ($category, $updatedCategory) {
            $browser->visit(route('categories.index'))
                ->assertSee($category->name)
                ->clickLink('Edit')
                ->waitForText('Category Edit')
                ->assertInputValue('#form\.name', $category->name)
                ->type('#form\.name', $updatedCategory->name)
                ->press('Update')
                ->waitForText('Category updated successfully')
                ->assertSee($updatedCategory->name);
        });
    }

    public function test_delete()
    {
        $category = Category::factory()->create();

        $this->browse(function (Browser $browser) use ($category) {
            $browser->visit(route('categories.index'))
                ->assertSee($category->name)
                ->press('Delete')
                ->assertDialogOpened('Are you sure that you want to delete it?')
                ->acceptDialog()
                ->waitUntilMissingText($category->name)
                ->assertDontSee($category->name);
        });
    }
}
