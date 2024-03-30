<?php

namespace App\Http\Controllers;

use App\Models\Berles;
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
        $berles->foglalas_datuma = $request->foglalas_datuma;
        $berles->foglalas_kezdet = $request->foglalas_kezdet;
        $berles->foglalas_vege = $request->foglalas_vege;
        $berles->ar_id = $request->ar_id;
        $berles->kedvezmeny_id = $request->kedvezmeny_id;
        $berles->hely_id = $request->hely_id;
        $berles->generalt_kod = $request->generalt_kod;
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
        $berles->generalt_kod = $request->generalt_kod;
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
}
