<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $product = Product::query()->inRandomOrder()->first();
        $quantity = fake()->randomNumber(2);
        $purchasePrice = $product->price;
        $price = $product->sale_price;
        $total = $quantity * $price;
        $discount = fake()->randomFloat(2, 0, 0.40 * $total);
        $grand_total = $total - $discount;
        return [
            'customer_id' => Customer::query()->inRandomOrder()->first()->id,
            'product_id' => $product->id,
            'quantity' => $quantity,
            'purchase_price' => $purchasePrice,
            'price' => $price,
            'total' => $total,
            'discount' => $discount,
            'grand_total' => $grand_total,
            'date' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
