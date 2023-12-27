<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Vendor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Purchase>
 */
class PurchaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $product = Product::query()->inRandomOrder()->first();
        $price = $product->price;
        $quantity = fake()->randomNumber(2);
        return [
            "vendor_id"=> Vendor::query()->inRandomOrder()->first()->id,
            "product_id" => $product->id,
            "price" => $price,
            "quantity" => $quantity,
            "total" => $quantity * $price,
            "purchase_date" => today()->subDays(fake()->randomNumber(2))
        ];
    }
}
