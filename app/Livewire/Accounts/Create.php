<?php

namespace App\Livewire\Accounts;

use App\Livewire\Forms\AccountForm;
use Livewire\Component;

class Create extends Component
{
    public AccountForm $form;

    public function save()
    {
        $this->form->store();

        session()->flash('message', 'Account created successfully');

        return to_route('accounts.index');
    }

    public function render()
    {
        return view('livewire.accounts.create');
    }
}
