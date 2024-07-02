<?php

namespace App\Livewire\PaymentMethods;

use App\Models\PaymentMethod;
use Livewire\Component;

class Index extends Component
{
    public $paymentMethods;

    public function mount()
    {
        $this->paymentMethods = PaymentMethod::latest()->get();
    }

    public function render()
    {
        return view('livewire.payment-methods.index');
    }
}
