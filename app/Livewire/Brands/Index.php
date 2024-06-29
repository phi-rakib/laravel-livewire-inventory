<?php

namespace App\Livewire\Brands;

use App\Models\Brand;
use Livewire\Component;

class Index extends Component
{
    public $brands;

    public function mount()
    {
        $this->brands = $this->getAllBrands();
    }

    private function getAllBrands()
    {
        return Brand::latest()->get();
    }

    public function render()
    {
        return view('livewire.brands.index');
    }

    public function delete(int $id)
    {
        Brand::findOrFail($id)->delete();

        session()->flash('message', 'Brand deleted successfully');

        $this->brands = $this->getAllBrands();
    }
}
