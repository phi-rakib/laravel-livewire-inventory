<?php

namespace App\Livewire\PaymentMethods;

use App\Livewire\Forms\PaymentMethodForm;
use App\Models\PaymentMethod;
use Livewire\Component;

class Edit extends Component
{
    public PaymentMethodForm $form;

    public function mount(PaymentMethod $paymentMethod)
    {
        $this->form->setPaymentMethod($paymentMethod);
    }

    public function save()
    {
        $this->form->update();

        session()->flash('message', 'Payment Method updated successfully');

        return to_route('paymentMethods.index');
    }

    public function render()
    {
        return view('livewire.payment-methods.edit');
    }
}
