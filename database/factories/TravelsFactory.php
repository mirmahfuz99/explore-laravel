<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Travels>
 */
class TravelsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'is_public' => $this->faker->boolean(),
            'slug' => $this->faker->slug(),
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'number_of_days' => rand(1,10),
        ];
    }
}
