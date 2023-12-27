<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->unique()->word();
        $price = fake()->randomFloat(2, 100, 1000);
        $salePrice = $price * 1.3;
        return [
            'name' => $name,
            'sku'=> Str::random(10),
            'slug'=> $name,
            'description'=> fake()->paragraph(),
            'price'=> $price,
            'sale_price'=> $salePrice
        ];
    }
}
