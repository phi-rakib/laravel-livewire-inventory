<?php

namespace App\Livewire\PaymentMethods;

use App\Livewire\Forms\PaymentMethodForm;
use Livewire\Component;

class Create extends Component
{
    public PaymentMethodForm $form;

    public function save()
    {
        $this->form->store();   
        
        session()->flash('message', 'Payment Method created');

        return to_route('paymentMethods.index');
    }

    public function render()
    {
        return view('livewire.payment-methods.create');
    }
}
