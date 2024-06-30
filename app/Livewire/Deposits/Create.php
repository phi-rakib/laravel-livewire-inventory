<?php

namespace App\Livewire\Deposits;

use App\Livewire\Forms\DepositForm;
use App\Models\Account;
use App\Models\DepositCategory;
use Livewire\Component;

class Create extends Component
{
    public DepositForm $form;

    public function save()
    {
        $this->form->store();

        session()->flash('message', 'Deposited amount successfully');

        return to_route('deposits.index');
    }
    
    public function render()
    {
        $depositCategories = DepositCategory::pluck('name', 'id');
        $accounts = Account::pluck('name', 'id');

        return view('livewire.deposits.create', compact('depositCategories', 'accounts'));
    }
}
