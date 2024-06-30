<?php

namespace App\Livewire\DepositCategories;

use App\Models\DepositCategory;
use Livewire\Component;

class Index extends Component
{
    public $depositCategories;

    public function mount()
    {
        $this->depositCategories = DepositCategory::latest()->get();
    }

    public function render()
    {
        return view('livewire.deposit-categories.index');
    }
}
