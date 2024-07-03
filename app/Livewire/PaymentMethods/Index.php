<?php

namespace App\Livewire\PaymentMethods;

use App\Models\PaymentMethod;
use Livewire\Component;

class Index extends Component
{
    public $paymentMethods;

    public function mount()
    {
        $this->paymentMethods = $this->getPaymentMethodList();
    }

    public function delete(PaymentMethod $paymentMethod)
    {
        $paymentMethod->delete();

        $this->paymentMethods = $this->getPaymentMethodList();
    }

    private function getPaymentMethodList()
    {
        return PaymentMethod::latest()->get();
    }

    public function render()
    {
        return view('livewire.payment-methods.index');
    }
}
