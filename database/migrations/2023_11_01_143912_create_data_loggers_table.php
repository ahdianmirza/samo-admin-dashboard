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
            $table->float('mikronKecil')->nullable();
            $table->float('mikronSedang')->nullable();
            $table->float('mikronBesar')->nullable();
            $table->float('suhu')->nullable();
            $table->integer('kelembapan')->nullable();
            $table->float('karbonDioksida')->nullable();
            $table->float('alkohol')->nullable();
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