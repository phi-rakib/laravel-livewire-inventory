<?php

namespace Tests\Browser;

use App\Models\DepositCategory;
use Illuminate\Foundation\Testing\DatabaseTruncation;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DepositCategoryTest extends DuskTestCase
{
    use DatabaseTruncation;

    public function test_index()
    {
        $depositCategory = DepositCategory::factory()->create();

        $this->browse(function (Browser $browser) use ($depositCategory) {
            $browser->visit(route('depositCategories.index'))
                ->assertSee('Deposit Category Index')
                ->assertSee($depositCategory->name);
        });
    }

    public function test_create()
    {
        $depositCategory = DepositCategory::factory()->make();

        $this->browse(function (Browser $browser) use ($depositCategory) {
            $browser->visit(route('depositCategories.index'))
                ->assertSee('Create Deposit Category')
                ->clickLink('Create Deposit Category')
                ->waitForText('Deposit Category Create')
                ->type('#form\.name', $depositCategory->name)
                ->press('Create')
                ->waitForText('Deposit Category created successfully')
                ->assertSee($depositCategory->name);
        });
    }

    public function test_update()
    {
        $depositCategory = DepositCategory::factory()->create();
        $updatedDepositCategory = DepositCategory::factory()->make();

        $this->browse(function (Browser $browser) use ($depositCategory, $updatedDepositCategory) {
            $browser->visit(route('depositCategories.index'))
                ->assertSee($depositCategory->name)
                ->clickLink('Edit')
                ->waitForText('Deposit Category Edit')
                ->assertInputValue('#form\.name', $depositCategory->name)
                ->type('#form\.name', $updatedDepositCategory->name)
                ->press('Update')
                ->waitForText('Deposit Category updated successfully')
                ->assertSee($updatedDepositCategory->name);
        });
    }

    public function test_delete()
    {
        $depositCategory = DepositCategory::factory()->create();

        $this->browse(function (Browser $browser) use ($depositCategory) {
            $browser->visit(route('depositCategories.index'))
                ->assertSee($depositCategory->name)
                ->press('Delete')
                ->assertDialogOpened('Are you sure that you want to delete it?')
                ->acceptDialog()
                ->waitUntilMissingText($depositCategory->name)
                ->assertDontSee($depositCategory->name);
        });
    }
}
