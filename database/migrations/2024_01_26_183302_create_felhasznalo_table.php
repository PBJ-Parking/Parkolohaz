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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->char('telefonszam', 15)->nullable();;
            $table->string('cim')->nullable();
            $table->string('email', 50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->char('megrendelo_tipus', 1);
            $table->char('adoszam', 13)->nullable();
            $table->boolean('admin_e')->default(0);
            $table->timestamps();
        });

        DB::statement('ALTER TABLE user ADD CONSTRAINT chk_ceges_vagy_maganszemely_lehet_csak_megadva CHECK (megrendelo_tipus = "M" or megrendelo_tipus = "C");');
        DB::statement('ALTER TABLE user ADD CONSTRAINT chk_admin_e_nulla_vagy_egy_erteku_lehet CHECK (admin_e = 0 or admin_e = 1);');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
