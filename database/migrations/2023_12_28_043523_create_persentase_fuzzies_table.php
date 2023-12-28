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
        Schema::create('persentase_fuzzies', function (Blueprint $table) {
            $table->id();
            $table->integer('mikronKecil')->nullable();
            $table->integer('mikronSedang')->nullable();
            $table->integer('mikronBesar')->nullable();
            $table->integer('suhu')->nullable();
            $table->integer('kelembapan')->nullable();
            $table->integer('alkohol')->nullable();
            $table->integer('karbonDioksida')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persentase_fuzzies');
    }
};