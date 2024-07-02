<?php

namespace App\Livewire\DepositCategories;

use App\Livewire\Forms\DepositCategoryForm;
use Livewire\Component;

class Create extends Component
{
    public DepositCategoryForm $form;

    public function save()
    {
        $this->form->store();

        session()->flash('message', 'Deposit Category created successfully');

        return to_route('depositCategories.index');
    }

    public function render()
    {
        return view('livewire.deposit-categories.create');
    }
}
