<?php

namespace App\Livewire\Accounts;

use App\Models\Account;
use Livewire\Component;

class Index extends Component
{
    public $accounts;

    public function mount()
    {
        $this->accounts = $this->getAllAccounts();
    }

    public function delete(int $id)
    {
        Account::findOrFail($id)->delete();

        $this->accounts = $this->getAllAccounts();
    }

    private function getAllAccounts()
    {
        return Account::latest()->get();
    }

    public function render()
    {
        return view('livewire.accounts.index');
    }
}
