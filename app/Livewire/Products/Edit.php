<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class Edit extends Component
{
    public $product;

    public $name;

    public $description;

    public $price;

    protected $rules = [
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
    ];

    public function mount($id)
    {
        $this->product = Product::find($id);

        $this->name = $this->product->name;
        $this->price = $this->product->price;
    }

    public function submit()
    {
        $this->validate();

        $this->product->update([
            'name' => $this->name,
            'price' => $this->price,
        ]);

        session()->flash('message', 'Product updated successfully!');

        $this->redirectRoute('products.index');
    }

    public function render()
    {
        return view('livewire.products.edit');
    }
}
