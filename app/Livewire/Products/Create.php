<?php

namespace App\Livewire\Products;

use App\Livewire\Forms\ProductForm;
use App\Models\Product;
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
        return view('livewire.products.create');
    }
}
