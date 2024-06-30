<?php

namespace App\Livewire\DepositCategories;

use App\Models\DepositCategory;
use Livewire\Component;

class Index extends Component
{
    public $depositCategories;

    public function mount()
    {
        $this->depositCategories = $this->getAllDepositCategories();
    }

    public function delete(DepositCategory $depositcategory)
    {
        $depositcategory->delete();

        $this->depositCategories = $this->getAllDepositCategories();
    }

    private function getAllDepositCategories()
    {
        return DepositCategory::latest()->get();
    }

    public function render()
    {
        return view('livewire.deposit-categories.index');
    }
}
