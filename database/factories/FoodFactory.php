<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->price(),
            'img' => $this->faker->img(),
            'sub' => $this->faker->sub(),
            'category' => $this->faker->category(),
            'remember_token' => Str::random(10),
        ];
    }
}
