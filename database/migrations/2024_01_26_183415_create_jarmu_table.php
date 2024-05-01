<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jarmu', function (Blueprint $table) {
            $table->id('jarmu_id');
            $table->char('rendszam', 8);
            $table->foreignId('felhasznalok_id')->references('id')->on('user');
            $table->foreignId('jarmu_tipus')->references('id')->on('tipus');
            $table->boolean('generalt_azon')->default(0);
            $table->timestamps();
        });

        DB::statement('ALTER TABLE jarmu ADD CONSTRAINT chk_generalt_azon_nulla_vagy_egy_erteku_lehet CHECK (generalt_azon = 0 or generalt_azon = 1);');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jarmu');
    }
};
