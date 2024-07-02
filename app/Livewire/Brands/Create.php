<?php

namespace App\Livewire\Brands;

use App\Livewire\Forms\BrandForm;
use Livewire\Component;

class Create extends Component
{
    public BrandForm $form;

    public function submit()
    {
        $this->form->store();

        session()->flash('message', 'Brand created successfully');

        return to_route('brands.index');
    }

    public function render()
    {
        return view('livewire.brands.create');
    }
}
