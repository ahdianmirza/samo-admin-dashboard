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
        DataLogger::create([
            "mikronKecil" => "10000",
            "mikronBesar" => "4",
            "suhu" => "25",
            "kelembapan" => "90",
            "karbonDioksida" => "1.54",
            "alkohol" => "0"
        ]);

        DataLogger::create([
            "mikronKecil" => "4567",
            "mikronBesar" => "2",
            "suhu" => "20",
            "kelembapan" => "60",
            "karbonDioksida" => "4.50",
            "alkohol" => "0"
        ]);
    }
}