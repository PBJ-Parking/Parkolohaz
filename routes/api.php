<?php

use App\Http\Controllers\JarmuController;
use App\Http\Controllers\NapiArakController;
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
        #bejelentkezett felhasználó rendszáma
        Route::get('/authAdatok', JarmuController::class, 'AuthJarmu');

    Route::middleware(['admin'])->group(function () {
        #admin api-jai:
    });
});
#vendég api-jai:
Route::get('/akt_arak', [NapiArakController::class,'akt_arak']);





