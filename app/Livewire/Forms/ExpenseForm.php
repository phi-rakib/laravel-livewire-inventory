<?php

namespace App\Livewire\Forms;

use App\Models\Account;
use Exception;
use Illuminate\Support\Facades\DB;
use Livewire\Form;

class ExpenseForm extends Form
{
    public $expense_date;
    public $expense_category_id;
    public $account_id;
    public $payment_method_id;
    public $amount;
    public $note;

    protected $rules = [
        'expense_date' => 'required|date',
        'amount' => 'required|numeric|min:1',
        'note' => 'nullable|string|max:255',
        'account_id' => 'required|integer',
        'expense_category_id' => 'required|integer',
        'payment_method_id' => 'required|integer',
    ];

    public function store()
    {
        $this->validate();

        $account = Account::findOrFail($this->account_id);

        if($account->balance < $this->amount)
            throw new Exception("Insufficient balance");

        $payload = $this->all();

        DB::transaction(function () use($account, $payload){
            $account->decrement('balance', $payload['amount']);

            $account->expenses()->create($this->all());
        });
    }
}
