<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
         DB::unprepared(
             "
         CREATE TRIGGER trg_parkolohely_torlese
         BEFORE Delete ON parkolohely
         FOR EACH ROW
         BEGIN
             IF OLD.statusz = 'F' OR OLD.statusz = 'B' THEN
                 SIGNAL SQLSTATE '45000'
               
                     SET MESSAGE_TEXT = 'foglalt vagy bérelt parkolóhely nem törölhető.';
             END IF;
         END;"
         ); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared(
            'drop trigger trg_parkolohely_torlese'
        );
    }
};
