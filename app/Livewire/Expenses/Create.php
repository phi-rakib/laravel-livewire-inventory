<?php

namespace App\Livewire\Expenses;

use App\Livewire\Forms\ExpenseForm;
use App\Models\Account;
use App\Models\ExpenseCategory;
use App\Models\PaymentMethod;
use Exception;
use Livewire\Component;

class Create extends Component
{
    public ExpenseForm $form;

    public function save()
    {
        try {
            $this->form->store();
        } catch (Exception $ex) {
            session()->flash('message', $ex->getMessage());

            return;
        }

        session()->flash('message', 'Expense created successfully');

        return to_route('expenses.index');
    }

    public function render()
    {
        $accounts = Account::pluck('name', 'id');
        $expenseCategories = ExpenseCategory::pluck('name', 'id');
        $paymentMethods = PaymentMethod::pluck('name', 'id');

        return view('livewire.expenses.create', compact('accounts', 'expenseCategories', 'paymentMethods'));
    }
}
