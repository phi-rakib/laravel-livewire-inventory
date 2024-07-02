<?php

namespace App\Livewire\Expenses;

use App\Models\Expense;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{
    public $expenses;

    public function mount()
    {
        $this->expenses = $this->getAllExpenses();
    }

    public function delete(Expense $expense)
    {
        DB::transaction(function () use ($expense) {
            $expense->account()->increment('balance', $expense->amount);

            $expense->delete();
        });

        $this->expenses = $this->getAllExpenses();
    }

    private function getAllExpenses()
    {
        return Expense::latest()
            ->with(['account:id,name', 'expenseCategory:id,name', 'paymentMethod:id,name'])
            ->get();
    }

    public function render()
    {
        return view('livewire.expenses.index');
    }
}
