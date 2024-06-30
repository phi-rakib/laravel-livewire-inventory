<?php

namespace App\Livewire\Accounts;

use App\Models\Account;
use Livewire\Component;

class Index extends Component
{
    public $accounts;

    public function mount()
    {
        $this->accounts = Account::latest()->get();
    }

    public function render()
    {
        return view('livewire.accounts.index');
    }
}
