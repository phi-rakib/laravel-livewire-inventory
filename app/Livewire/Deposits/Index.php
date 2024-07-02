<?php

namespace App\Livewire\Deposits;

use App\Models\Deposit;
use Livewire\Component;

class Index extends Component
{
    public $deposits;

    public function mount()
    {
        $this->deposits = Deposit::latest()->with(['account:id,name', 'depositCategory:id,name'])->get();

        return $this->deposits;
    }

    public function render()
    {
        return view('livewire.deposits.index');
    }
}
