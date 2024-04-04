<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Parkolohely;
use App\Http\Controllers\ParkolohelyController;



class ParkolohelyTest extends TestCase
{
    /**
     * A basic unit test example.
    
    public function test_example(): void
    {
        $this->assertTrue(true);
    }
 */
    public function test_store()
{
    $parkolohely = Parkolohely::factory()->make
    (['hely_tipusa'=>2,
     'statusz'=>'f', 
     'emelet'=>1]); 

    $this->assertEquals($parkolohely->statusz, 'f');
   
}

}
