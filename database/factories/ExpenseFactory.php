<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\ExpenseCategory;
use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'expense_date' => fake()->date(),
            'amount' => fake()->numberBetween(100, 1000),
            'note' => fake()->sentence(),
            'account_id' => Account::factory(),
            'expense_category_id' => ExpenseCategory::factory(),
            'payment_method_id' => PaymentMethod::factory(),
        ];
    }
}
