<?php

namespace App\Http\Controllers;

use App\Models\Jarmu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function destroy($id)
    {
        Jarmu::find($id)->delete();
    }

    public function AuthJarmu(){
        $felhasznalo = Auth::user()->id;
        $jarmu = Jarmu::with('felhasznalo')->where('felhasznalok_id', '=', $felhasznalo)->get();
        return $jarmu;
    }

}
