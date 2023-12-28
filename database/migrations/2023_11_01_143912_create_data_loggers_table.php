<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_loggers', function (Blueprint $table) {
            $table->id();
            $table->string('mikronKecil')->nullable();
            $table->string('mikronSedang')->nullable();
            $table->string('mikronBesar')->nullable();
            $table->string('suhu')->nullable();
            $table->string('kelembapan')->nullable();
            $table->string('karbonDioksida')->nullable();
            $table->string('alkohol')->nullable();
            $table->string('dataPrediksi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_loggers');
    }
};