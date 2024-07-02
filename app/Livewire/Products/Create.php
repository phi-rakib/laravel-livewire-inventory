<?php

namespace App\Livewire\Products;

use App\Livewire\Forms\ProductForm;
use App\Models\Brand;
use App\Models\Category;
use Livewire\Component;

class Create extends Component
{
    public ProductForm $form;

    public function submit()
    {
        $this->form->store();

        session()->flash('message', 'Product created successfully.');

        $this->redirectRoute('products.index');
    }

    public function render()
    {
        $categories = Category::pluck('name', 'id');
        $brands = Brand::pluck('name', 'id');

        return view('livewire.products.create', compact('categories', 'brands'));
    }
}
