<?php

namespace App\Livewire\Forms;

use App\Models\Category;
use Livewire\Form;

class CategoryForm extends Form
{
    public ?Category $category;

    public $name;

    protected $rules = [
        'name' => 'required|string|max:255',
    ];

    public function setCategory(Category $category)
    {
        $this->category = $category;
        $this->name = $category->name;
    }

    public function store()
    {
        $this->validate();

        Category::create($this->only(['name']));
    }

    public function update()
    {
        $this->validate();

        $this->category->update($this->only(['name']));    
    }
}
