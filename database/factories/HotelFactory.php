<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'hotel_title' =>fake()->word(),
            'distance'=>fake()->randomFloat(2,0, 2000),
            'days'=>fake()->randomFloat(2,0, 30),
            'price'=>fake()->randomFloat(2,0, 1000),
            // 'image' => fake()->imageUrl
            'image' => 'https://source.unsplash.com/random/1200x700?sig='.rand(0, 19999999),
            'country_id' => fake()-> numberBetween(1, 4)
        ];
    }
}