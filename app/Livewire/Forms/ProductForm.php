<?php

namespace App\Livewire\Forms;

use App\Models\Product;
use Livewire\Form;

class ProductForm extends Form
{
    public ?Product $product;

    public $name;

    public $price;

    public $category_id;

    public $brand_id;

    protected $rules = [
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'category_id' => 'required|integer|min:1',
        'brand_id' => 'required|integer|min:1',
    ];

    public function setProduct(Product $product)
    {
        $this->product = $product;
        $this->name = $product->name;
        $this->price = $product->price;
    }

    public function store()
    {
        $this->validate();

        Product::create($this->all());
    }

    public function update()
    {
        $this->validate();

        $this->product->update($this->all());
    }
}
