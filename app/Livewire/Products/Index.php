<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::all();
    }

    public function render()
    {
        return view('livewire.products.index');
    }

    public function delete($id)
    {
        Product::find($id)->delete();

        $this->products = Product::all();
    }
}
