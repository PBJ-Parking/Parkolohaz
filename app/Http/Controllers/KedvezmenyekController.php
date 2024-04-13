<?php

namespace App\Http\Controllers;

use App\Models\Kedvezmenyek;
use Carbon\Carbon;
use Illuminate\Contracts\Support\CanBeEscapedWhenCastToString;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\String\b;

class KedvezmenyekController extends Controller
{
    public function index()
    {
        $kedvezmenyek = response()->json(Kedvezmenyek::all());
        return $kedvezmenyek;
    }

    public function show($id)
    {
        $kedvezmeny = response()->json(Kedvezmenyek::find($id));
        return $kedvezmeny;
    }

    public function store(Request $request)
    {
        $kedvezmeny = new Kedvezmenyek();
        $kedvezmeny->megnevezes = $request->megnevezes;
        $kedvezmeny->hatartol = $request->hatartol;
        $kedvezmeny->hatarig = $request->hatarig;
        $kedvezmeny['mikortol'] = Carbon::createFromFormat('m/d/Y', $request->mikortol)->format('Y-m-d');
        $kedvezmeny['meddig'] = Carbon::createFromFormat('m/d/Y', $request->meddig)->format('Y-m-d');
        $kedvezmeny->merteke = $request->merteke;
        $kedvezmeny->save();
    }

    public function update(Request $request, $id)
    {
        $kedvezmeny = Kedvezmenyek::find($id);
        $kedvezmeny->megnevezes = $request->megnevezes;
        $kedvezmeny->hatartol = $request->hatartol;
        $kedvezmeny->hatarig = $request->hatarig;
        $kedvezmeny['mikortol'] = Carbon::createFromFormat('m/d/Y', $request->mikortol)->format('Y-m-d');
        $kedvezmeny['meddig'] = Carbon::createFromFormat('m/d/Y', $request->meddig)->format('Y-m-d');
        $kedvezmeny->merteke = $request->merteke;
        $kedvezmeny->save();
    }
    public function destroy($id)
    {
        Kedvezmenyek::find($id)->delete();
    }

    public function kedvezmeny_mikortol($mikortol)
    {
        return DB::select('
            select * from kedvezmenyek
            where mikortol = ? 
        ', [$mikortol]);
    }

    public function kedvezmenyNapokSzamanakSzerint($napokSzama)
    {
       
        $napokSzama = (int)$napokSzama;
      /*    dd(var_dump($napokSzama)); */
        $kedvezmeny = Kedvezmenyek::where('hatartol', '<=', $napokSzama)->whereRaw('(hatarig >= ' . $napokSzama . ' or hatarig is null)')
            ->where('mikortol', '<=', date('Y-m-d')) 
            ->whereRaw('(meddig >= CURDATE() or meddig is null)')->orderBy('mikortol', 'desc')->first();
        //dd($kedvezmeny->toSql());
        return $kedvezmeny;
    }

      public function kedvezmenyAktualisMax()
    {
       
   
        $kedvezmeny = Kedvezmenyek::where('mikortol', '<=', date('Y-m-d')) 
            ->whereRaw('(meddig >= CURDATE() or meddig is null)')
            ->whereRaw('(merteke>0)')
            ->orderBy('merteke', 'desc')->first();
       
        return $kedvezmeny;
    }
}
