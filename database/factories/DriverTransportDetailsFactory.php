<?php

namespace Database\Factories;

use App\Models\DriverTransportDetails;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DriverTransportDetails>
 */
class DriverTransportDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = DriverTransportDetails::class;

    public function definition()
    {
        return [
            'transport_type_id' => function () {
                return \App\Models\TransportType::factory()->create()->id;
            },
            'driver_id' => function () {
                return \App\Models\Driver::factory()->create()->id;
            },
            'name' => $this->faker->optional()->word,
            'register_no' => $this->faker->optional()->numerify('##-##-####'), // Optional format
            'engine_no' => $this->faker->optional()->numerify('######'), // Optional format
            'chasis_no' => $this->faker->optional()->numerify('##############'), // Optional format
            'model_no' => $this->faker->optional()->word,
            'seat_capacity' => $this->faker->optional()->randomNumber(2),

            'car_planumber' => $this->faker->optional()->numerify('###-####'), // Optional format
            'operating_license' => $this->faker->optional()->numerify('##########'), // Optional format
            'car_luggage' => $this->faker->optional()->word,
            'car_photos' => null,
        ];
    }
}
