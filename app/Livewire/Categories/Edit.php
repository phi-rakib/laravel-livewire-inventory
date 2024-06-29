<?php

namespace App\Livewire\Categories;

use App\Livewire\Forms\CategoryForm;
use App\Models\Category;
use Livewire\Component;

class Edit extends Component
{
    public CategoryForm $form;

    public function mount(int $id)
    {
        $this->form->setCategory(Category::findOrFail($id));
    }
    
    public function submit()
    {
        $this->form->update();
        
        session()->flash('message', 'Category updated successfully');
        
        return to_route('categories.index');
    }

    public function render()
    {
        return view('livewire.categories.edit');
    }
}
