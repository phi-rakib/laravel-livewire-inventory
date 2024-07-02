<?php

namespace Database\Seeders;

use App\Models\Deposit;
use Illuminate\Database\Seeder;

class DepositSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Deposit::factory(3)
            ->hasAccount(1)
            ->hasDepositCategory(1)
            ->create();
    }
}
