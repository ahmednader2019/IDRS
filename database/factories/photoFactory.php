<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'driver_id' => fake()->numberBetween(1,10),
            'personal_photo' => 'diagram.png',
            'driver_licence' => 'diagram.png',
            'car_licence' => 'diagram.png',
        ];
    }
}
