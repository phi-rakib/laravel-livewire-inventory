<?php

namespace App\Livewire\Forms;

use App\Models\ExpenseCategory;
use Livewire\Form;

class ExpenseCategoryFrom extends Form
{
    public ?ExpenseCategory $expenseCategory;

    public $name;

    protected $rules = [
        'name' => 'required|string|max:255',
    ];

    public function setExpenseCategory(ExpenseCategory $expenseCategory)
    {
        $this->expenseCategory = $expenseCategory;

        $this->fill($expenseCategory);
    }

    public function store()
    {
        $this->validate();

        ExpenseCategory::create($this->all());
    }

    public function update()
    {
        $this->expenseCategory->update($this->all());
    }
}
