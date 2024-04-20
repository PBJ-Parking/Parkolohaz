<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Tipus;
use App\Models\Parkolohely;
use App\Models\Kedvezmenyek;


class DatabaseTest extends TestCase
{
    use RefreshDatabase;


    public function test_Db()
    {
        $this->seed();
   
       
       Parkolohely::factory()->count(15)->create();
       $this->assertDatabaseCount('parkolohely',87);

       Kedvezmenyek::factory()->count(3)->create();
       $this->assertDatabaseCount('kedvezmenyek',15);

       
      
          
       Parkolohely::factory()->create(
        ['hely_tipusa'=>1,
        'statusz'=>'s',
        'emelet'=>4 ]);
     
       $this->assertDatabaseHas('parkolohely', ['emelet'=>4]);
    
    }

  


}



