<?php

namespace App\Livewire\Forms;

use App\Models\DepositCategory;
use Livewire\Form;

class DepositCategoryForm extends Form
{
    public $name;

    protected $rules = [
        'name' => 'required|string|max:255',
    ];

    public function store()
    {
        $this->validate();
        
        DepositCategory::create($this->all());
    }
}
