<?php

namespace App\Livewire\Forms;

use App\Models\Deposit;
use Illuminate\Support\Facades\DB;
use Livewire\Form;

class DepositForm extends Form
{
    public $deposit_date;
    public $amount;
    public $note;
    public $account_id;
    public $deposit_category_id;

    protected $rules = [
        'deposit_date' => 'required|date',
        'amount' => 'required|numeric|min:1',
        'note' => 'nullable',
        'account_id' => 'required|integer|min:1',
        'deposit_category_id' => 'required|integer|min:1',
    ];

    public function store()
    {
        $this->validate();

        $payload = $this->all();

        DB::transaction(function () use($payload) {
            $deposit = Deposit::create($payload);

            $deposit->account()->increment('balance', $deposit->amount);
        });
    }
}
