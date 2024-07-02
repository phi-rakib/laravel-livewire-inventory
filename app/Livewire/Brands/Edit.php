<?php

namespace App\Livewire\Brands;

use App\Livewire\Forms\BrandForm;
use App\Models\Brand;
use Livewire\Component;

class Edit extends Component
{
    public BrandForm $form;

    public function mount($id)
    {
        $this->form->setBrand(Brand::findOrFail($id));
    }

    public function submit()
    {
        $this->form->update();

        session()->flash('message', 'Brand updated successfully');

        return to_route('brands.index');
    }

    public function render()
    {
        return view('livewire.brands.edit');
    }
}
