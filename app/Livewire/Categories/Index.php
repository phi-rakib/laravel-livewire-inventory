<?php

namespace App\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class Index extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = $this->getLatestCategories();
    }

    public function delete(int $id)
    {
        Category::findOrFail($id)->delete();

        session()->flash('message', 'Category deleted successfully');

        $this->categories = $this->getLatestCategories();
    }

    private function getLatestCategories()
    {
        return Category::latest()->get();
    }

    public function render()
    {
        return view('livewire.categories.index');
    }
}
