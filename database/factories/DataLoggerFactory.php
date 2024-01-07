<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataLogger>
 */
class DataLoggerFactory extends Factory
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
            'mikronKecil' => fake()->randomFloat(2, 10, 100),
            'mikronSedang' => fake()->randomFloat(2, 10, 100),
            'mikronBesar' => fake()->randomFloat(2, 10, 100),
            'suhu' => fake()->randomFloat(2, 20, 40),
            'kelembapan' => fake()->numberBetween(1, 100),
            'karbonDioksida' => fake()->randomFloat(2, 10, 100),
            'alkohol' => fake()->randomFloat(2, 10, 100),
            'dataPrediksi' => fake()->randomElement(['Buruk', 'Sedang', 'Baik']),
            'created_at' => $date
        ];
    }
}