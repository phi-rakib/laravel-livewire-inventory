<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Expense;
use Illuminate\Database\Seeder;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Account::factory(4)
            ->has(
                Expense::factory(3)
                    ->hasExpenseCategory(1)
                    ->hasPaymentMethod(1)
            )
            ->create();
    }
}
