<?php

namespace App\Livewire\Products;

use App\Livewire\Forms\ProductForm;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Edit extends Component
{
    public ProductForm $form;

    public function mount($id)
    {
        $this->form->setProduct(Product::findOrFail($id));
    }

    public function submit()
    {
        $this->form->update();

        session()->flash('message', 'Product updated successfully!');

        $this->redirectRoute('products.index');
    }

    public function render()
    {
        $categories = Category::pluck('name', 'id');

        $brands = Brand::pluck('name', 'id');

        return view('livewire.products.edit', compact('categories', 'brands'));
    }
}
