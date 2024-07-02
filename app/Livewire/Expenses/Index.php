<?php

namespace App\Livewire\Expenses;

use App\Models\Expense;
use Livewire\Component;

class Index extends Component
{
    public $expenses;

    public function mount()
    {
        $this->expenses = Expense::latest()
            ->with(['account:id,name', 'expenseCategory:id,name', 'paymentMethod:id,name'])
            ->get();

        // dd($this->expenses->toArray());
    }

    public function render()
    {
        return view('livewire.expenses.index');
    }
}
