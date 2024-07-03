<?php

namespace App\Livewire\DepositCategories;

use App\Livewire\Forms\DepositCategoryForm;
use App\Models\DepositCategory;
use Livewire\Component;

class Edit extends Component
{
    public DepositCategoryForm $form;

    public function mount(DepositCategory $depositCategory)
    {
        $this->form->setDepositCategory($depositCategory);
    }

    public function save()
    {
        $this->form->update();

        session()->flash('message', 'Deposit Category updated successfully');

        return to_route('depositCategories.index');
    }

    public function render()
    {
        return view('livewire.deposit-categories.edit');
    }
}
