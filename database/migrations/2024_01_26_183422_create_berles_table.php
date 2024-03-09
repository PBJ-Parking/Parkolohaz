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
            $table->primary(['rendszam', 'foglalas_datuma']);
            $table->string('rendszam');
            $table->foreign('rendszam')->references('rendszam')->on('jarmu');
            $table->dateTime('foglalas_datuma')->default(now());
            $table->date('foglalas_kezdet');
            $table->date('foglalas_vege');
            $table->foreignId('ar_id')->references('ar_id')->on('napi_arak');
            $table->foreignId('kedvezmeny_id')->references('kedvezmeny_id')->on('kedvezmenyek');
            $table->foreignId('hely_id')->references('hely_id')->on('parkolohely');
            $table->string('generalt_kod');
            $table->foreign('generalt_kod')->references('rendszam')->on('jarmu');
            $table->boolean('fizetve');
            $table->timestamps();
        });

        DB::statement('ALTER TABLE berles ADD CONSTRAINT chk_vege_nagyobb_egyenlo_mint_kezdete CHECK (foglalas_vege >= foglalas_kezdet);');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berles');
    }
};
