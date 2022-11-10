<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
                'name' =>fake()->firstName(),
                'surname' =>fake()->lastName(),
                'email' => fake()->unique()->safeEmail(),
                'phone' => fake()->numerify('##########'),
                'hotel_id' => fake()-> numberBetween(1, 4)
        ];
    }
}