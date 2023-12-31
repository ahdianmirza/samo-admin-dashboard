<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MonitoringUdara;
use App\Models\PersentaseUdara;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'username' => 'adminsamo',
            'password' => bcrypt('samomantap123')
        ]);

        PersentaseUdara::create([
            'mikronkecil' => 0,
            'mikronSedang' => 0,
            'mikronBesar' => 0,
            'suhu' => 0,
            'kelembapan' => 0,
            'alkohol' => 0,
            'karbonDioksida' => 0,
        ]);

        MonitoringUdara::create([
            'mikronKecil' => 0,
            'mikronSedang' => 0,
            'mikronBesar' => 0,
            'suhu' => 0,
            'kelembapan' => 0,
            'karbonDioksida' => 0,
            'alkohol' => 0,
            'dataPrediksi' => "",
        ]);
    }
}