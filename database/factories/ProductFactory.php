<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 1, 100), // Generate a random price
            'image' => $this->faker->imageUrl(),
            'stock' => $this->faker->numberBetween(1, 100),
            'status' => $this->faker->boolean,
            'is_favorite' => $this->faker->boolean,
            'category_id' => $this->faker->numberBetween(1, 4),
        ];
    }

    /**
     * Indicate that the price should have a default value.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function withDefaultPrice()
    {
        return $this->state([
            'price' => 10.00, // Set a default price for all products
        ]);
    }
}
