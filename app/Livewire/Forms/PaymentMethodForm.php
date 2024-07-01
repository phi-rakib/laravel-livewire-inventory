<?php

namespace App\Livewire\Forms;

use App\Models\PaymentMethod;
use Livewire\Form;

class PaymentMethodForm extends Form
{
    public ?PaymentMethod $paymentMethod;

    public $name;

    protected $rules = [
        'name' => 'required|string|max:255',
    ];

    public function setPaymentMethod(PaymentMethod $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;

        $this->fill($paymentMethod);
    }

    public function store()
    {
        $this->validate();

        PaymentMethod::create($this->all());
    }

    public function update()
    {
        $this->validate();

        $this->paymentMethod->update($this->all());
    }
}
