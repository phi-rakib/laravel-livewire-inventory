<?php

namespace App\Livewire\Forms;

use App\Models\ExpenseCategory;
use Livewire\Form;

class ExpenseCategoryFrom extends Form
{
    public $name;

    protected $rules = [
        'name' => 'required|string|max:255',
    ];

    public function store()
    {
        $this->validate();
        
        ExpenseCategory::create($this->all());
    }
}
