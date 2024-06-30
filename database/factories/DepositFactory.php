<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\DepositCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Deposit>
 */
class DepositFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'deposit_date' => fake()->date(),
            'amount' => fake()->numberBetween(100, 1000),
            'account_id' => Account::factory(),
            'deposit_category_id' => DepositCategory::factory(),
            'note' => fake()->sentence(),
        ];
    }
}
