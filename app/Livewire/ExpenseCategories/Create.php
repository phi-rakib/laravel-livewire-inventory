<?php

namespace App\Livewire\ExpenseCategories;

use App\Livewire\Forms\ExpenseCategoryFrom;
use Livewire\Component;

class Create extends Component
{
    public ExpenseCategoryFrom $form;

    public function save()
    {
        $this->form->store();
        
        session()->flash('message', 'Expense Category created successfully');

        return to_route('expenseCategories.index');
    }

    public function render()
    {
        return view('livewire.expense-categories.create');
    }
}
