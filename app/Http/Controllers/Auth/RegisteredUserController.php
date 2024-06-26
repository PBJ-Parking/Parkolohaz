<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): Response
    {
       
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'megrendelo_tipus' =>['required', 'string', 'regex:/^c|m$/i'],
          
        ]);

        if ($request->megrendelo_tipus=='C'){
            $request->validate([
               
                'adoszam' => ['required', 'string', 'regex:/^[0-9]{8}-[0-9]-[0-9]{2}$/'],
              
            ]);  
        }
 // átírva adatbázis szerkezet szerint
       
 $password= Hash::make($request->password);
 $user = User::create([

            'name' => $request->name,
            'telefonszam' => $request->telefonszam,
            'cim' =>  $request->cim,
            'email' => $request->email,
            'password' => $password,
            'password_confirmation' => $password,
            'megrendelo_tipus' =>$request->megrendelo_tipus,
            'adoszam' => $request->adoszam,
            'admin_e' =>0,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return response()->noContent();
    }
}
