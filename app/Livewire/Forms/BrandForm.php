<?php

namespace App\Livewire\Forms;

use App\Models\Brand;
use Livewire\Form;

class BrandForm extends Form
{
    public ?Brand $brand;

    public $name;

    protected $rules = [
        'name' => 'required|string|max:255',
    ];

    public function setBrand(Brand $brand): void
    {   
        $this->brand = $brand;
        $this->name = $brand->name;
    }

    public function store(): void
    {
        $this->validate();
        
        Brand::create($this->all());
    }

    public function update(): void
    {
        $this->validate();

        $this->brand->update($this->all());
    }
}
