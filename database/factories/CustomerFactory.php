<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Customer::class;
    
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'profile_photo' => null,
            'nid_number' => $this->faker->optional()->numerify('##########'), // Optional 10-digit numeric
            'passport_number' => $this->faker->optional()->bothify('??########'), // Optional 8-character alphanumeric
            'passport_photo' => null,
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
            'status' => 1,
        ];
    }
}
