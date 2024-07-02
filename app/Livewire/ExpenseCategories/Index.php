<?php

namespace App\Livewire\ExpenseCategories;

use App\Models\ExpenseCategory;
use Livewire\Component;

class Index extends Component
{
    public $expenseCategories;

    public function mount()
    {
        $this->expenseCategories = ExpenseCategory::latest()->get();
    }

    public function render()
    {
        return view('livewire.expense-categories.index');
    }
}
