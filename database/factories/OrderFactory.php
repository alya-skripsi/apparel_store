<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomNumber(),
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'no_hp' => $this->faker->phoneNumber,
            'address1' => $this->faker->streetAddress,
            'address2' => $this->faker->secondaryAddress,
            'city' => $this->faker->city,
            'province' => $this->faker->state,
            'subtotal' => $this->faker->numberBetween(10000, 1000000),
            'status' => $this->faker->numberBetween(0, 1),
            'message' => $this->faker->sentence,
            'tracking_number' => $this->faker->unique()->numerify('TRK-######'),
            'payment_status' => $this->faker->randomElement(['1', '2', '3']),
            'snap_token' => null,
            'courier' => null,
            'cost_delivery' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
