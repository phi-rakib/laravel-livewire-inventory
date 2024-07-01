<?php

namespace App\Livewire\Forms;

use App\Models\PaymentMethod;
use Livewire\Form;

class PaymentMethodForm extends Form
{
    public $name;

    protected $rules = [
        'name' => 'required|string|max:255',
    ];

    public function store()
    {
        $this->validate();

        PaymentMethod::create($this->all());
    }
}
