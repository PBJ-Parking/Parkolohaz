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
        Schema::create('kedvezmenyek', function (Blueprint $table) {
            $table->id('kedvezmeny_id');
            $table->string('megnevezes', 50);
            $table->integer('hatartol');
            $table->date('mikortol');
            $table->integer('merteke');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kedvezmenyek');
    }
};
