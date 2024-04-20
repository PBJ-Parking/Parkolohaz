<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use App\Models\User;
use App\Models\Tipus;
use App\Models\Parkolohely;
use Illuminate\Foundation\Testing\RefreshDatabase;

abstract class TestCase extends BaseTestCase
{
    use RefreshDatabase;
    use CreatesApplication;


    protected function tesztUser()
    {
        $user=User::factory(1)->create();
               
        return ($user);
    }


    protected function tesztAdmin()
    {
        $admin=User::factory(1)->create();
        $admin->admin_e=1;
       $admin->save();

       
        return ($admin);
    }

    protected function tesztTipus()
    {
        $tipus=Tipus::factory()->create([
        "id"=>1,
            "elnevezes" => "motor"
        ]);

       
        return ($tipus);
    }

protected function tesztParkolohely()
{
    $tipus = $this->tesztTipus();
   
    $tipus->save();
   
    return (Parkolohely::factory()->make());
}

}
