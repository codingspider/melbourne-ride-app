<?php

namespace Database\Factories;

use App\Models\Driver;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Driver>
 */
class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Driver::class;

    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'phone' => $this->faker->numerify('##########'), // 10-digit numeric
            'address' => $this->faker->optional()->streetAddress,
            'license_number' => $this->faker->optional()->bothify('???-###-???'), // Optional format

            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
            'service_id' => $this->faker->randomElement([1, 2]),
            'license_photo' => null,
            'nid_photo' => null,
            'passport_photo' => null,
            'documents' => null,

            'status' => $this->faker->randomElement([0, 1, 2]),
        ];
    }
}
