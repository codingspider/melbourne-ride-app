<?php

namespace Database\Factories;

use App\Models\TransportType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TransportType>
 */
class TransportTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = TransportType::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->optional()->sentence,
        ];
    }
}
