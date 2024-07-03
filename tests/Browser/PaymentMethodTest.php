<?php

namespace Tests\Browser;

use App\Models\PaymentMethod;
use Illuminate\Foundation\Testing\DatabaseTruncation;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PaymentMethodTest extends DuskTestCase
{
    use DatabaseTruncation;

    public function test_index()
    {
        $paymentMethod = PaymentMethod::factory()->create();

        $this->browse(function (Browser $browser) use ($paymentMethod) {
            $browser->visit(route('paymentMethods.index'))
                ->assertSee('Payment Method Index')
                ->assertSee($paymentMethod->name);
        });
    }

    public function test_create()
    {
        $paymentMethod = PaymentMethod::factory()->make();

        $this->browse(function (Browser $browser) use ($paymentMethod) {
            $browser->visit(route('paymentMethods.index'))
                ->assertSee('Payment Method Index')
                ->clickLink('Create Payment Method')
                ->waitForText('Payment Method Create')
                ->type('#form\.name', $paymentMethod->name)
                ->press('Create')
                ->waitForText('Payment Method created successfully')
                ->assertSee($paymentMethod->name);
        });
    }

    public function test_update()
    {
        $paymentMethod = PaymentMethod::factory()->create();
        $updatedPaymentMethod = PaymentMethod::factory()->make();

        $this->browse(function (Browser $browser) use ($paymentMethod, $updatedPaymentMethod) {
            $browser->visit(route('paymentMethods.index'))
                ->assertSee('Payment Method Index')
                ->assertSee($paymentMethod->name)
                ->clickLink('Edit')
                ->waitForText('Payment Method Update')
                ->assertInputValue('#form\.name', $paymentMethod->name)
                ->type('#form\.name', $updatedPaymentMethod->name)
                ->press('Update')
                ->waitForText('Payment Method updated successfully')
                ->assertSee($updatedPaymentMethod->name);
        });
    }

    public function test_delete()
    {
        $paymentMethod = PaymentMethod::factory()->create();

        $this->browse(function (Browser $browser) use ($paymentMethod) {
            $browser->visit(route('paymentMethods.index'))
                ->assertSee('Payment Method Index')
                ->assertSee($paymentMethod->name)
                ->press('Delete')
                ->assertDialogOpened('Are you sure that you want to delete it?')
                ->acceptDialog()
                ->waitUntilMissingText($paymentMethod->name)
                ->assertDontSee($paymentMethod->name);
        });
    }
}
