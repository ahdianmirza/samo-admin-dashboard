<?php

namespace Database\Seeders;

use App\Models\DataLogger;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataLoggerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DataLogger::factory()->count(50)->create();
    }
}