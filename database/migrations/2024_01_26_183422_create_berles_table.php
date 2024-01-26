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
        Schema::create('berles', function (Blueprint $table) {
            $table->primary(['rendszam', 'foglalas_datuma']);
            $table->foreignId('rendszam')->references('rendszam')->on('jarmu');
            $table->date('foglalas_kezdet');
            $table->date('foglalas_vege');
            $table->foreignId('ar_id')->references('ar_id')->on('napi_arak');
            $table->foreignId('kedvezmeny_id')->references('kedvezmeny_id')->on('kedvezmenyek');
            $table->foreignId('hely_id')->references('hely_id')->on('parkolohely');
            $table->foreignId('generalt_kod')->references('rendszam')->on('jarmu');
            $table->boolean('fizetve');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berles');
    }
};
