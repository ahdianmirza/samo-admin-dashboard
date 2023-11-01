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
            $table->string('mikronKecil');
            $table->string('mikronBesar');
            $table->string('suhu');
            $table->string('kelembapan');
            $table->string('karbonDioksida');
            $table->string('alkohol');
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