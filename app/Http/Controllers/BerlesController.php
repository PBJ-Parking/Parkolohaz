<?php

namespace App\Http\Controllers;

use App\Models\Berles;
use App\Models\Kedvezmenyek;
use App\Models\NapiArak;
use App\Models\Parkolohely;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BerlesController extends Controller
{
    public function index()
    {
        $berlesek = response()->json(Berles::all());
        return $berlesek;
    }

    public function show ($jarmu_id, $foglalas_datuma)
    {
        $berles = Berles::where('jarmu_id', $jarmu_id)->where('foglalas_datuma', $foglalas_datuma)->get();
        return $berles[0];
    }


    public function store(Request $request)
    {
        $berles = new Berles();
        $berles->jarmu_id = $request->jarmu_id;
        $berles->foglalas_datuma = now();
        $berles->foglalas_kezdet = $request->foglalas_kezdet;
        $berles->foglalas_vege = $request->foglalas_vege;
        $berles->ar_id = $request->ar_id;
        $berles->kedvezmeny_id = $request->kedvezmeny_id;
        $berles->hely_id = $request->hely_id;
        $berles->fizetve = $request->fizetve;
        $berles->save();
    }

    public function update(Request $request, $jarmu_id, $foglalas_datuma)
    {   
        $berles = $this->show($jarmu_id, $foglalas_datuma);
        $berles->foglalas_kezdet = $request->foglalas_kezdet;
        $berles->foglalas_vege = $request->foglalas_vege;
        $berles->ar_id = $request->ar_id;
        $berles->kedvezmeny_id = $request->kedvezmeny_id;
        $berles->hely_id = $request->hely_id;
        $berles->fizetve = $request->fizetve;
        $berles->save();
    }

    public function destroy($jarmu_id, $foglalas_datuma)
    {
        $this->show($jarmu_id, $foglalas_datuma)->delete();
    }


    public function nap_vegen_nem_fizetett()
    {
        return DB::select("
        Select hely_id from berles
        where fizetve = 0");
    }

    public function ar_id_fk(){
        return NapiArak::all()->pluck("ar_id");
    }

    public function kedvezmeny_id_fk(){
        return Kedvezmenyek::all()->pluck("kedvezmeny_id");
    }

    public function hely_id_fk(){
        return Parkolohely::all()->pluck("hely_id");
    }
}
