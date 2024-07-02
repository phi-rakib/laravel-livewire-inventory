<?php

namespace App\Livewire\Forms;

use App\Models\DepositCategory;
use Livewire\Form;

class DepositCategoryForm extends Form
{
    public $name;

    public ?DepositCategory $depositCategory;

    protected $rules = [
        'name' => 'required|string|max:255',
    ];

    public function setDepositCategory(DepositCategory $depositCategory)
    {
        $this->depositCategory = $depositCategory;

        $this->name = $depositCategory->name;
    }

    public function store()
    {
        $this->validate();

        DepositCategory::create($this->all());
    }

    public function update()
    {
        $this->validate();

        $this->depositCategory->update($this->all());
    }
}
