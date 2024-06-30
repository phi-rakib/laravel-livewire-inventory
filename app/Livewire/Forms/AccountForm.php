<?php

namespace App\Livewire\Forms;

use App\Models\Account;
use Livewire\Form;

class AccountForm extends Form
{
    public ?Account $account;

    public $name;

    public $account_number;

    public $balance;

    protected $rules = [
        'name' => 'required|string|max:255',
        'account_number' => 'required|string|max:255',
        'balance' => 'required|numerice|min:0',
    ];

    public function setAccount(Account $account)
    {
        $this->account = $account;
        $this->name = $account->name;
        $this->account_number = $account->account_number;
        $this->balance = $account->balance;
    }

    public function store()
    {
        $this->validate();

        Account::create($this->all());
    }

    public function update()
    {
        $this->validate();
        
        $this->account->update($this->all());
    }
}
