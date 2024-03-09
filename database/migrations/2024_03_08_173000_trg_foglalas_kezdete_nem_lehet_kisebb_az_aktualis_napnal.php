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
       /*  DB::unprepared(
            "
        CREATE TRIGGER trg_foglalas_kezdete_nem_lehet_kisebb_az_aktualis_napnal
        BEFORE INSERT ON berles
        FOR EACH ROW
        BEGIN
            IF NEW.foglalas_kezdet < NOW() THEN
                SIGNAL SQLSTATE '45000'
                    SET MESSAGE_TEXT = 'A foglalás kezdetének nagyobbnak vagy egyenlőnek kell lennie az aktuális naphoz képest!';
            END IF;
        END;"
        ); */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared(
            'drop trigger trg_foglalas_kezdete_nem_lehet_kisebb_az_aktualis_napnal'
        );
    }
};
