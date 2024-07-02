<?php

namespace App\Livewire\ExpenseCategories;

use App\Livewire\Forms\ExpenseCategoryFrom;
use App\Models\ExpenseCategory;
use Livewire\Component;

class Edit extends Component
{
    public ExpenseCategoryFrom $form;

    public function mount(ExpenseCategory $expenseCategory)
    {
        $this->form->setExpenseCategory($expenseCategory);
    }

    public function save()
    {
        $this->form->update();

        session()->flash('message', 'Expense Category updated successfully');

        return to_route('expenseCategories.index');
    }

    public function render()
    {
        return view('livewire.expense-categories.edit');
    }
}
