<?php

namespace Database\Seeders;

use App\Models\Fuzzy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FuzzySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fuzzy::factory()->count(50)->create();
    }
}