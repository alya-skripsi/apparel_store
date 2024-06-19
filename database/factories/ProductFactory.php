<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => mt_rand(1, 3), 
            'name' => $this->faker->sentence(3),
            'slug' => $this->faker->slug(),
            'price' => $this->faker->numberBetween(10000, 100000),
            'stock' => $this->faker->numberBetween(0, 10),
            'description' => $this->faker->paragraph(3),
        ];
    }
}
