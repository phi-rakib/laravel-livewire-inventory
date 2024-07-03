<?php

namespace Tests\Browser;

use App\Models\Account;
use Illuminate\Foundation\Testing\DatabaseTruncation;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AccountTest extends DuskTestCase
{
    use DatabaseTruncation;

    public function test_index()
    {
        $account = Account::factory()->create();

        $this->browse(function (Browser $browser) use ($account) {
            $browser->visit(route('accounts.index'))
                ->assertSee('Accounts Index')
                ->assertSee($account->name);
        });
    }

    public function test_create()
    {
        $account = Account::factory()->make();

        $this->browse(function (Browser $browser) use ($account) {
            $browser->visit(route('accounts.index'))
                ->clickLink('Create')
                ->waitForText('Account Create')
                ->type('#form\.name', $account->name)
                ->type('#form\.account_number', $account->account_number)
                ->type('#form\.balance', $account->balance)
                ->press('Create')
                ->waitForText('Account created successfully')
                ->assertSee('Accounts Index')
                ->assertSee($account->name);
        });
    }

    public function test_update()
    {
        Account::factory()->create();
        $updatedAccount = Account::factory()->make();

        $this->browse(function (Browser $browser) use ($updatedAccount) {
            $browser->visit(route('accounts.index'))
                ->clickLink('Edit')
                ->waitForText('Account Edit')
                ->type('#form\.name', $updatedAccount->name)
                ->type('#form\.account_number', $updatedAccount->account_number)
                ->type('#form\.balance', $updatedAccount->balance)
                ->press('Update')
                ->waitForText('Account updated successfully')
                ->assertSee('Accounts Index')
                ->assertSee($updatedAccount->name)
                ->assertSee($updatedAccount->account_number)
                ->assertSee($updatedAccount->balance);
        });
    }

    public function test_delete()
    {
        $account = Account::factory()->create();

        $this->browse(function(Browser $browser) use($account) {
            $browser->visit(route('accounts.index'))
            ->assertSee($account->name)
            ->press('Delete')
            ->assertDialogOpened('Are you sure that you want to delete it?')
            ->acceptDialog()
            ->waitUntilMissingText($account->name)
            ->assertDontSee($account->name);
        });
    }

}
