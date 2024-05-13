<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fleet>
 */
class FleetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'passanger' => $this->faker->numberBetween(1, 5),
            'luggage' => $this->faker->optional()->numberBetween(1, 5),
            'hand_bag' => $this->faker->optional()->numberBetween(1, 5),
            'photos' => json_encode(["https://fakeimg.pl/300"]),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'status' => $this->faker->randomElement([1, 0, 2]),
        ];
    }
}
