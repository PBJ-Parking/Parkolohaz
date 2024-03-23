<?php

use App\Http\Controllers\BerlesController;
use App\Http\Controllers\JarmuController;
use App\Http\Controllers\KedvezmenyekController;
use App\Http\Controllers\NapiArakController;
use App\Http\Controllers\ParkolohelyController;
use App\Http\Controllers\TipusController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/user', UserController::class); 

Route::middleware(['auth.basic'])->group(function () {
        #felhasználó api-jai:
        Route::get('/authUser', [UserController::class, 'authUser']);

        Route::middleware(['admin'])->group(function () {
            #admin api-jai:
            //User (admin route)
            Route::get('felhasznalok', [UserController::class, 'index']);
            Route::delete('felhasznalok/{id}', [UserController::class, 'destroy']);
    
            //Tipus (admin route)
            Route::get('tipusok', [TipusController::class, 'index']);
            Route::get('tipusok/{id}', [TipusController::class, 'show']);
            Route::post('tipusok', [TipusController::class, 'store']);
            Route::put('tipusok/{id}', [TipusController::class, 'update']);
            Route::delete('tipusok/{id}', [TipusController::class, 'destroy']);
    
            //Jarmu (admin route)
            Route::get('jarmuvek', [JarmuController::class, 'index']);
            Route::put('jarmu/{rendszam}', [JarmuController::class, 'update']);
            Route::delete('jarmu/{rendszam}', [JarmuController::class, 'destroy']);
    
            //Napi arak (admin route)
            Route::get('napi_arak', [NapiArakController::class, 'index']);
            Route::get('napi_arak/{id}', [NapiArakController::class, 'show']);
            Route::post('napi_arak', [NapiArakController::class, 'store']);
            Route::put('napi_arak/{id}', [NapiArakController::class, 'update']);
            Route::delete('napi_arak/{id}', [NapiArakController::class, 'destroy']);
            Route::get('napi_arak_tipus/{tipus}', [NapiArakController::class, 'napi_arak_tipus']);
    
            //Kedvezmenyek (admin route)
            Route::get('kedvezmenyek', [KedvezmenyekController::class, 'index']);
            Route::get('kedvezmenyek/{id}', [KedvezmenyekController::class, 'show']);
            Route::get('kedvezmeny_mikortol/{mikortol}', [KedvezmenyekController::class, 'kedvezmeny_mikortol']);
            Route::post('kedvezmenyek', [KedvezmenyekController::class, 'store']);
            Route::put('kedvezmenyek/{id}', [KedvezmenyekController::class, 'update']);
            Route::delete('kedvezmenyek/{id}', [KedvezmenyekController::class, 'destroy']);
    
            //Parkolohely (admin route)
            Route::get('parkolohely_statusz/{statusz}', [ParkolohelyController::class, 'parkolohely_statusz']);
            Route::post('parkolohely', [ParkolohelyController::class, 'store']);
            Route::put('parkolohely/{id}', [ParkolohelyController::class, 'update']);
            Route::delete('parkolohely/{id}', [ParkolohelyController::class, 'destroy']);
    
            //Berles (admin route) 
            Route::get('berlesek', [BerlesController::class, 'index']);
            Route::put('berles/{rendszam}/{foglalas_datuma}', [BerlesController::class, 'update']);
        });
});
#vendég api-jai:


