<?php

namespace App\Livewire\Deposits;

use App\Livewire\Forms\DepositForm;
use App\Models\Account;
use App\Models\Deposit;
use App\Models\DepositCategory;
use Exception;
use Livewire\Component;

class Edit extends Component
{
    public DepositForm $form;

    public function mount(Deposit $deposit)
    {
        $this->form->setUpDeposit($deposit);
    }

    public function save()
    {
        try {
            $this->form->update();
        } catch (Exception $ex) {
            session()->flash('message', $ex->getMessage());
            return; 
        }

        session()->flash('message', 'Deposit updated successfully');
        return to_route('deposits.index');
    }

    public function render()
    {
        $accounts = Account::pluck('name', 'id');
        $depositCategories = DepositCategory::pluck('name', 'id');
        
        return view('livewire.deposits.edit', compact('accounts', 'depositCategories'));
    }
}
