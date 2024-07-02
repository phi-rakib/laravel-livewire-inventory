<?php

namespace App\Livewire\Forms;

use App\Models\Deposit;
use Exception;
use Illuminate\Support\Facades\DB;
use Livewire\Form;

class DepositForm extends Form
{
    public ?Deposit $deposit;

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

    public function setUpDeposit(Deposit $deposit)
    {
        $this->deposit = $deposit;

        $this->fill($deposit);
    }

    public function store()
    {
        $this->validate();

        $payload = $this->all();

        DB::transaction(function () use ($payload) {
            $deposit = Deposit::create($payload);

            $deposit->account()->increment('balance', $deposit->amount);
        });
    }

    public function update()
    {
        $previousDepositedAmount = Deposit::where('id', $this->deposit->id)->value('amount');

        $accountBalance = $this->deposit->account->balance;

        $balance = $accountBalance - $previousDepositedAmount + $this->amount;

        if ($balance < 0) {
            throw new Exception('Sorry, could not update because of insufficient balance');
        }

        $this->deposit->account()->update([
            'balance' => $balance,
        ]);

        $this->deposit->update($this->all());
    }
}
