<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'expense_category_id'=> \App\Models\ExpenseCategory::query()->inRandomOrder()->first()->id,
            'description' => fake()->sentence(),
            'amount' => fake()->randomFloat(2, 100, 10000),
            'expense_date' => today()->subDays(fake()->randomNumber(1, 90)),
            'receipt'=> Str::random(7),
        ];
    }
}
