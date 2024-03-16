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
        Schema::create('jarmu', function (Blueprint $table) {
            $table->string('rendszam')->primary();
            $table->foreignId('felhasznalok_id')->references('id')->on('user');
            $table->foreignId('jarmu_tipus')->references('id')->on('tipus');
            $table->boolean('generalt_azon')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jarmu');
    }
};
