<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Jarmu;
use App\Models\Parkolohely;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

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

        \App\Models\Kedvezmenyek::factory(1)->create([
            'megnevezes' => '24-es alap kedvezmény',
            'hatartol' => 0,
            'hatarig' => 7,
            'mikortol' => '2024-01-01',
            'meddig' => null,
            'merteke' => 0,
        ]);
        \App\Models\Kedvezmenyek::factory(1)->create([
            'megnevezes' => '24-es alap kedvezmény',
            'hatartol' => 8,
            'hatarig' => 14,
            'mikortol' => '2024-01-01',
            'meddig' => null,
            'merteke' => 5,
        ]);
        \App\Models\Kedvezmenyek::factory(1)->create([
            'megnevezes' => '24-es alap kedvezmény',
            'hatartol' => 15,
            'hatarig' => 29,
            'mikortol' => '2024-01-01',
            'meddig' => null,
            'merteke' => 10,
        ]);
        \App\Models\Kedvezmenyek::factory(1)->create([
            'megnevezes' => '24-es alap kedvezmény',
            'hatartol' => 30,
            'hatarig' => null,
            'mikortol' => '2024-01-01',
            'meddig' => null,
            'merteke' => 15,
        ]);
        \App\Models\Kedvezmenyek::factory(1)->create([
            'megnevezes' => '23-as Karácsonyi',
            'hatartol' => 0,
            'hatarig' => 7,
            'mikortol' => '2023-12-01',
            'meddig' => '2023-12-31',
            'merteke' => 5,
        ]);
        \App\Models\Kedvezmenyek::factory(1)->create([
            'megnevezes' => '23-as Karácsonyi',
            'hatartol' => 8,
            'hatarig' => 14,
            'mikortol' => '2023-12-01',
            'meddig' => '2023-12-31',
            'merteke' => 10,
        ]);
        \App\Models\Kedvezmenyek::factory(1)->create([
            'megnevezes' => '23-as Karácsonyi',
            'hatartol' => 15,
            'hatarig' => 29,
            'mikortol' => '2023-12-01',
            'meddig' => '2023-12-31',
            'merteke' => 15,
        ]);
        \App\Models\Kedvezmenyek::factory(1)->create([
            'megnevezes' => '23-as Karácsonyi',
            'hatartol' => 30,
            'hatarig' => null,
            'mikortol' => '2023-12-01',
            'meddig' => '2023-12-31',
            'merteke' => 20,
        ]);
        \App\Models\Kedvezmenyek::factory(1)->create([
            'megnevezes' => '23-as alap kedvezmény',
            'hatartol' => 0,
            'hatarig' => 7,
            'mikortol' => '2023-01-01',
            'meddig' => '2023-11-30',
            'merteke' => 0,
        ]);
        \App\Models\Kedvezmenyek::factory(1)->create([
            'megnevezes' => '23-as alap kedvezmény',
            'hatartol' => 8,
            'hatarig' => 14,
            'mikortol' => '2023-01-01',
            'meddig' => '2023-11-30',
            'merteke' => 4,
        ]);
        \App\Models\Kedvezmenyek::factory(1)->create([
            'megnevezes' => '23-as alap kedvezmény',
            'hatartol' => 15,
            'hatarig' => 29,
            'mikortol' => '2023-01-01',
            'meddig' => '2023-11-30',
            'merteke' => 8,
        ]);
        \App\Models\Kedvezmenyek::factory(1)->create([
            'megnevezes' => '23-as alap kedvezmény',
            'hatartol' => 30,
            'hatarig' => null,
            'mikortol' => '2023-01-01',
            'meddig' => '2023-11-30',
            'merteke' => 15,
        ]);




        $kovetkezo_datum = $kezdodatum;
        for ($i = 0; $i < 10; $i++) {
            $mennyiseg = rand(30, 100);
            $kovetkezo_datum = $kovetkezo_datum->addDays($mennyiseg);

            \App\Models\NapiArak::factory(1)->create([
                'mikortol' => $kovetkezo_datum
            ]);
        };


        Parkolohely::factory(72)->create();


        /* \App\Models\Kedvezmenyek::factory(7)->create(); */
        \App\Models\Berles::factory(100)->create();
    }
}
