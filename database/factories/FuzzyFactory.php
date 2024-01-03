<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fuzzy>
 */
class FuzzyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date = $this->faker->dateTimeBetween('-1 day');
        return [
            'nilaiPrediksi' => fake()->randomFloat(1, 0, 1),
            'created_at' => $date
        ];
    }
}