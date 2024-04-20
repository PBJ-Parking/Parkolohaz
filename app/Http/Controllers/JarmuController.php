<?php

namespace App\Http\Controllers;

use App\Models\Jarmu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JarmuController extends Controller
{
    public function index()
    {
        $jarmuvek = response()->json(Jarmu::all());
        return $jarmuvek;
    }

    public function show($id)
    {
        $jarmu = response()->json(Jarmu::find($id));
        return $jarmu;
    }

    public function store(Request $request)
    {
        $jarmu = new Jarmu();
        $jarmu->felhasznalok_id = $request->felhasznalok_id;
        $jarmu->jarmu_tipus = $request->jarmu_tipus;
        $jarmu->generalt_azon = $request->generalt_azon;
        $jarmu->save();
    }

    public function update(Request $request, $id)
    {
        $jarmu = Jarmu::find($id);
        $jarmu->felhasznalok_id = $request->felhasznalok_id;
        $jarmu->jarmu_tipus = $request->jarmu_tipus;
        $jarmu->generalt_azon = $request->generalt_azon;
        $jarmu->save();
    }

    public function patch(Request $request, $rendszam)
    {
        $jarmu = Jarmu::find($rendszam);
        $jarmu->fill($request->only([
            'rendszam',
            
        ]));
        $jarmu->save();
    }

    public function destroy($id)
    {
        Jarmu::find($id)->delete();
    }

    public function AuthJarmu(){
        $felhasznalo = Auth::user()->id;
        $jarmu = Jarmu::with('felhasznalo')->where('felhasznalok_id', '=', $felhasznalo)->first();
        return $jarmu;
    }

    public function jarmu_szama_tipusok()
    {
        return response()->json(DB::select(
            "SELECT t.elnevezes, COUNT(t.elnevezes) as darab FROM jarmu as j inner join tipus as t on t.id=j.jarmu_tipus GROUP BY t.elnevezes;"
        ));
    }

}
