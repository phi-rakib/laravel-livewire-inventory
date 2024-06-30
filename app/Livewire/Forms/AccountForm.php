<?php

namespace App\Livewire\Forms;

use App\Models\Account;
use Livewire\Form;

class AccountForm extends Form
{
    public $name;

    public $account_number;

    public $balance;

    protected $rules = [
        'name' => 'required|string|max:255',
        'account_number' => 'required|string|max:255',
        'balance' => 'required|numerice|min:0',
    ];

    public function store()
    {
        Account::create($this->all());
    }
}
