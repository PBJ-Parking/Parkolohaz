<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
         DB::unprepared(
             "
         CREATE TRIGGER trg_m_parkolohely_torlese
         BEFORE Delete ON parkolohely
         FOR EACH ROW
         BEGIN
             IF OLD.statusz = 'M' THEN
                 SIGNAL SQLSTATE '45000'
               
                     SET MESSAGE_TEXT = 'megszüntetett parkolóhely nem törölhető.';
             END IF;
         END;"
        ); 

        DB::unprepared(
            "
        CREATE TRIGGER trg_m_parkolohely_modositasa
        BEFORE Update ON parkolohely
        FOR EACH ROW
        BEGIN
            IF OLD.statusz = 'M'  THEN
                SIGNAL SQLSTATE '45000'
              
                    SET MESSAGE_TEXT = 'megszüntetett parkolóhely nem módosítható.';
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
            'drop trigger trg_m_parkolohely_torlese
            drop trigger trg_m_parkolohely_modositasa'
        );
    }
};
