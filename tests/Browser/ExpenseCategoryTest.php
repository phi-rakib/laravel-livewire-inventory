<?php

namespace Tests\Browser;

use App\Models\ExpenseCategory;
use Illuminate\Foundation\Testing\DatabaseTruncation;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExpenseCategoryTest extends DuskTestCase
{
    use DatabaseTruncation;

    public function test_index()
    {
        $expenseCategory = ExpenseCategory::factory()->create();

        $this->browse(function(Browser $browser) use($expenseCategory) {
            $browser->visit(route('expenseCategories.index'))
            ->assertSee('Expense Category Index')
            ->assertSee($expenseCategory->name);
        });
    }

    public function test_create()
    {
        $expenseCategory = ExpenseCategory::factory()->make();

        $this->browse(function(Browser $browser) use($expenseCategory) {
            $browser->visit(route('expenseCategories.index'))
            ->assertSee('Create Expense Category')
            ->clickLink('Create Expense Category')
            ->waitForText('Expense Category Create')
            ->type('#form\.name', $expenseCategory->name)
            ->press('Create')
            ->waitForText('Expense Category created successfully')
            ->assertSee($expenseCategory->name);
        });
    }

    public function test_update()
    {
        $expenseCategory = ExpenseCategory::factory()->create();
        $updatedExpenseCategory = ExpenseCategory::factory()->make();

        $this->browse(function(Browser $browser) use($expenseCategory, $updatedExpenseCategory) {
            $browser->visit(route('expenseCategories.index'))
            ->assertSee('Expense Category Index')
            ->assertSee($expenseCategory->name)
            ->clickLink('Edit')
            ->waitForText('Expense Category Edit')
            ->assertInputValue('#form\.name', $expenseCategory->name)
            ->type('#form\.name', $updatedExpenseCategory->name)
            ->press('Update')
            ->waitForText('Expense Category updated successfully')
            ->assertSee($updatedExpenseCategory->name);
        });
    }

    public function test_delete()
    {
        $expenseCategory = ExpenseCategory::factory()->create();

        $this->browse(function(Browser $browser) use($expenseCategory) {
            $browser->visit(route('expenseCategories.index'))
            ->assertSee('Expense Category Index')
            ->assertSee($expenseCategory->name)
            ->press('Delete')
            ->assertDialogOpened('Are you sure that you want to delete it?')
            ->acceptDialog()
            ->waitUntilMissingText($expenseCategory->name)
            ->assertDontSee($expenseCategory->name);
        });
    }
}
