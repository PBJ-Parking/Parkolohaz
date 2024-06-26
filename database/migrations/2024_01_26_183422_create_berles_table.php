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
        Schema::create('berles', function (Blueprint $table) {
            $table->primary(['jarmu_id', 'foglalas_datuma']);
            $table->foreignId('jarmu_id')->references('jarmu_id')->on('jarmu');
            $table->dateTime('foglalas_datuma')->default(now());
            $table->date('foglalas_kezdet');
            $table->date('foglalas_vege');
            $table->foreignId('ar_id')->references('ar_id')->on('napi_arak');
            $table->foreignId('kedvezmeny_id')->references('kedvezmeny_id')->on('kedvezmenyek');
            $table->foreignId('hely_id')->references('hely_id')->on('parkolohely');
            $table->boolean('fizetve');
            $table->timestamps();
        });

        DB::statement('ALTER TABLE berles ADD CONSTRAINT chk_vege_nagyobb_egyenlo_mint_kezdete CHECK (foglalas_vege >= foglalas_kezdet);');
        DB::statement('ALTER TABLE berles ADD CONSTRAINT chk_fizetve_nulla_vagy_egy_erteku_lehet CHECK (fizetve = 0 or fizetve = 1);');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berles');
    }
};
