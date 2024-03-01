<?php

namespace App\Http\Controllers;

use App\Models\Berles;
use Illuminate\Http\Request;

class BerlesController extends Controller
{
    public function index()
    {
        $berlesek = response()->json(Berles::all());
        return $berlesek;
    }

    public function show($id)
    {
        $berles = response()->json(Berles::find($id));
        return $berles;
    }

    public function store(Request $request)
    {
        $berles = new Berles();
        $berles->rendszam = $request->rendszam;
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

    public function update(Request $request, $id)
    {
        $berles = Berles::find($id);
        $berles->rendszam = $request->rendszam;
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

    public function destroy($id)
    {
        Berles::find($id)->delete();
    }
}
