<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(20)->create();
        \App\Models\Tipus::factory(1)->create([
            "elnevezes" => "mozgássérült"
        ]);

        \App\Models\Tipus::factory(1)->create([
            "elnevezes" => "elektromos"
        ]);

        \App\Models\Tipus::factory(1)->create([
            "elnevezes" => "hagyományos"
        ]);

        \App\Models\Tipus::factory(1)->create([
            "elnevezes" => "motor"
        ]);

        \App\Models\Jarmu::factory(25)->create();

        $kezdodatum = Carbon::now()->subYear(2);

        \App\Models\NapiArak::factory(1)->create([
            'mikortol' => $kezdodatum
        ]);

        \App\Models\User::factory(1)->create([
            'name' => "Alig Elek",
            'email' => "dogoljmeg@dead.com",
            'password' => "hateyoudad"
        ]);

        \App\Models\User::factory(1)->create([
            'name' => "Admin Bandi",
            'email' => "admin@admin.com",
            'password' => "admin123",
            "admin_e" => 1
        ]);

        \App\Models\Jarmu::factory(1)->create([
            'rendszam' => "FOS666",
            'felhasznalok_id' => 21,
            'jarmu_tipus' => 1,
            "generalt_azon" => 1
        ]);


        $kovetkezo_datum = $kezdodatum;
        for ($i = 0; $i < 10; $i++) {
                $mennyiseg = rand(30, 100);
                $kovetkezo_datum = $kovetkezo_datum->addDays($mennyiseg);

            \App\Models\NapiArak::factory(1)->create([
                'mikortol' => $kovetkezo_datum
            ]);
        }

        \App\Models\Kedvezmenyek::factory(7)->create();
        \App\Models\Parkolohely::factory(50)->create();
        \App\Models\Berles::factory(100)->create();
    }

    /*
    kalács
    */
}
