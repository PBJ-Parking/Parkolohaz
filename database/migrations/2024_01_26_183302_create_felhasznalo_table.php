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
        Schema::create('felhasznalo', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->char('telefonszam', 15);
            $table->string('cim');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->char('megrendelo_tipus', 1);
            $table->char('adoszam', 13);
            $table->boolean('admin_e')-> default(0);
            $table->timestamps();
        });

        DB::statement('ALTER TABLE felhasznalo ADD CONSTRAINT chk_ceges_vagy_maganszemely_lehet_csak_megadva CHECK (megrendelo_tipus = "M" or megrendelo_tipus = "C");');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('felhasznalo');
    }
};
