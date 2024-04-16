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
        Schema::create('kedvezmenyek', function (Blueprint $table) {
            $table->id('kedvezmeny_id');
            $table->string('megnevezes', 50);
            $table->integer('hatartol');
            $table->integer('hatarig')->nullable();
            $table->dateTime('mikortol');
            $table->dateTime('meddig')->nullable();
            $table->integer('merteke');
            $table->timestamps();
        });

        DB::statement('ALTER TABLE kedvezmenyek ADD CONSTRAINT chk_hatartol_nagyobb_egyenlo_mint_nulla CHECK (hatartol >= 0);');
        DB::statement('ALTER TABLE kedvezmenyek ADD CONSTRAINT chk_hatarig_nagyobb_egyenlo_mint_hatartol CHECK (hatarig >hatartol);');
        DB::statement('ALTER TABLE kedvezmenyek ADD CONSTRAINT chk_merteke_nulla_es_szaz_kozotti CHECK (merteke >= 0 and merteke <= 100);');
        DB::statement('ALTER TABLE kedvezmenyek ADD CONSTRAINT chk_meddig_nagyobb_egyenlo_mint_mikortol CHECK (meddig=null or meddig >=mikortol);');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kedvezmenyek');
    }
};
