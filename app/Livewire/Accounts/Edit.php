<?php

namespace App\Livewire\Accounts;

use App\Livewire\Forms\AccountForm;
use App\Models\Account;
use Livewire\Component;

class Edit extends Component
{
    public AccountForm $form;

    public function mount($id)
    {
        $this->form->setAccount(Account::findOrFail($id));
    }

    public function save()
    {
        $this->form->update();

        session()->flash('message', 'Account updated successfully');

        return to_route('accounts.index');
    }

    public function render()
    {
        return view('livewire.accounts.edit');
    }
}
