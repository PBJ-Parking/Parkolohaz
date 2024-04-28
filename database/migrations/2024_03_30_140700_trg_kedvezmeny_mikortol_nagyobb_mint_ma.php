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
        /* DB::unprepared(
             "
         CREATE TRIGGER trg_kedvezmeny_mikortol_nagyobb_mint_ma
         BEFORE INSERT ON kedvezmenyek
         FOR EACH ROW
         BEGIN
             IF NEW.mikortol <= NOW() THEN
                 SIGNAL SQLSTATE '45000'
                     SET MESSAGE_TEXT = 'mikortol-nak nagyobbnak kell lennie, mint a mai dátum.';
             END IF;
         END;"
         ); */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP TRIGGER trg_kedvezmeny_mikortol_nagyobb_mint_ma");
    }
};
