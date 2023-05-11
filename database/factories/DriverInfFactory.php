<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DriverInf>
 */
class DriverInfFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'email' => fake()->email,
            'gender' => 'male',
            'phone_number' => fake()->phoneNumber,
            'city' => fake()->city,
            'address' => 'cairo' ,
            'date_of_birth' => fake()->date(),
            'age'  => fake()->numberBetween(20,60),
            'nationality' =>'Egyptian',
            'national_id' => fake()->bankAccountNumber,
            'emergency_number' =>fake()->phoneNumber ,
            'status' =>'stable',

        ];
    }
}
