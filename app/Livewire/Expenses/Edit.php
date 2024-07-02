<?php

namespace App\Livewire\Expenses;

use App\Livewire\Forms\ExpenseForm;
use App\Models\Account;
use App\Models\Expense;
use App\Models\ExpenseCategory;
use App\Models\PaymentMethod;
use Exception;
use Livewire\Component;

class Edit extends Component
{
    public ExpenseForm $form;

    public function mount(Expense $expense)
    {
        $this->form->setExpense($expense);
    }

    public function save()
    {
        try {
            $this->form->update();
        } catch (Exception $ex) {
            session()->flash('message', $ex->getMessage());

            return;
        }

        session()->flash('message', 'Expense updated successfully');

        return to_route('expenses.index');
    }

    public function render()
    {
        $accounts = Account::pluck('name', 'id');
        $expenseCategories = ExpenseCategory::pluck('name', 'id');
        $paymentMethods = PaymentMethod::pluck('name', 'id');

        return view('livewire.expenses.edit', compact('accounts', 'expenseCategories', 'paymentMethods'));
    }
}
