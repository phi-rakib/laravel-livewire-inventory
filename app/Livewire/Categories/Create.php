<?php

namespace App\Livewire\Categories;

use App\Livewire\Forms\CategoryForm;
use Livewire\Component;

class Create extends Component
{
    public CategoryForm $form;

    public function submit()
    {
        $this->form->store();

        session()->flash('message', 'Category created successfully');

        return to_route('categories.index');
    }

    public function render()
    {
        return view('livewire.categories.create');
    }
}
