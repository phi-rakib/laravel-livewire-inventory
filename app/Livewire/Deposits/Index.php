<?php

namespace App\Livewire\Deposits;

use App\Models\Deposit;
use Livewire\Component;

class Index extends Component
{
    public $deposits;

    public function mount()
    {
        $this->deposits = Deposit::latest()->with(['account', 'depositCategory'])->get();

        return $this->deposits;
    }

    public function render()
    {
        return view('livewire.deposits.index');
    }
}
