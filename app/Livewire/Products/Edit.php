<?php

namespace App\Livewire\Products;

use App\Livewire\Forms\ProductForm;
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
        return view('livewire.products.edit');
    }
}
