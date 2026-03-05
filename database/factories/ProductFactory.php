<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        $brands = ['Apple', 'Nike', 'Sony', 'Samsung', 'Dell', 'Logitech'];
        $models = ['Pro', 'Ultra', 'Series X', 'Elite', 'Max'];
        $colors = ['Midnight Blue', 'Space Gray', 'Crimson', 'Matte Black'];
        $sizes  = ['Small', 'Large', '32-inch', '500GB'];
        $products = ['Laptop', 'Headphones', 'Running Shoes', 'Monitor', 'Smartphone'];

        $name = collect([
            fake()->randomElement($brands),
            fake()->randomElement($colors),
            fake()->randomElement($products),
            fake()->randomElement($models),
            fake()->randomElement($sizes),
        ])->random(3)->implode(' ');

        return [
            'name' => $name,
            'price' => fake()->randomFloat(2, 10, 500),
            'category' => fake()->randomElement(['Electronics', 'Books', 'Clothing', 'Home & Garden', null]),
        ];
    }
}
