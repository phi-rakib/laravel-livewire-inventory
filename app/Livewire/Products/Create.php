<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $price;

    protected $rules = [
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
    ];

    public function submit()
    {
        $this->validate();

        Product::create([
            'name' => $this->name,
            'price' => $this->price,
        ]);

        session()->flash('message', 'Product created successfully.');
        
        $this->redirectRoute('products.index');
    }
    
    public function render()
    {
        return view('livewire.products.create');
    }
}
