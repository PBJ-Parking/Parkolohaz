<?php

namespace App\Http\Controllers;

use App\Models\NapiArak;
use App\Models\Tipus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class NapiArakController extends Controller
{
    public function index()
    {
        $napi_arak = response()->json(NapiArak::all());
        return $napi_arak;
    }

    public function show($id)
    {
        $napi_ar = response()->json(NapiArak::find($id));
        return $napi_ar;
    }

    public function store(Request $request)
    {
        $napi_ar = new NapiArak();
        $napi_ar->megnevezes = $request->megnevezes;
        $napi_ar->ar = $request->ar;
        $napi_ar->mikortol = $request->mikortol;
        $napi_ar->tipus = $request->tipus;
        $napi_ar->save();
    }

    public function update(Request $request, $id)
    {
        $napi_ar = NapiArak::find($id);
        $napi_ar->megnevezes = $request->megnevezes;
        $napi_ar->ar = $request->ar;
        $napi_ar->mikortol = $request->mikortol;
        $napi_ar->tipus = $request->tipus;
        $napi_ar->save();
    }
    public function destroy($id)
    {
        NapiArak::find($id)->delete();
    }


    public function napi_arak_tipus($tipus){
        $lekerdezes = NapiArak::where('tipus', $tipus)->get();
        $napi_arak = response()->json($lekerdezes);
        return $napi_arak;
    }

    public function akt_arak(){
       return  DB::select("SELECT * from (Select Max(mikortol) as mikortol, tipus FROM `napi_arak` where mikortol<=CURRENT_DATE() GROUP by tipus) tipusonkent inner join Napi_arak using (mikortol, tipus) inner join tipus on tipusonkent.tipus=tipus.id;");
    }

    public function valasztottTipusAr($tipus){
        $ar = NapiArak::select('ar')->where('tipus', $tipus)->where('mikortol', '<=', date('Y-m-d'))->orderBy('mikortol', 'desc')->pluck('ar')->first();
        // $ar = NapiArak::select('ar')->where('tipus', $tipus)->where('mikortol', '<=', date('Y-m-d'))->orderBy('mikortol', 'desc')->toRawSql();
        return $ar;
    }
    public function valasztottArTipus($tipus){
        $arTipus = NapiArak::select('ar_id')->where('tipus', $tipus)->where('mikortol', '<=', date('Y-m-d'))->orderBy('mikortol', 'desc')->first();
        // $ar = NapiArak::select('ar')->where('tipus', $tipus)->where('mikortol', '<=', date('Y-m-d'))->orderBy('mikortol', 'desc')->toRawSql();
        return $arTipus;
    }

    public function tipus_id_fk(){
        return Tipus::all()->pluck("id"); 
    }

}
