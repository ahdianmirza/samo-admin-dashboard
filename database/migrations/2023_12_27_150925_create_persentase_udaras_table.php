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
        Schema::create('persentase_udaras', function (Blueprint $table) {
            $table->id();
            $table->integer('mikronKecil');
            $table->integer('mikronSedang');
            $table->integer('mikronBesar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persentase_udaras');
    }
};