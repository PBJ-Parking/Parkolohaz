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
        Schema::create('felhasznalo', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->char('telefonszam', 11);
            $table->string('cim');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('jelszo');
            $table->rememberToken();
            $table->char('megrendelo_tipus', 1);
            $table->char('adoszam', 13);
            $table->boolean('admin-e');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('felhasznalo');
    }
};
