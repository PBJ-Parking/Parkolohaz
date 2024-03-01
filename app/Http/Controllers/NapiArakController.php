<?php

namespace App\Http\Controllers;

use App\Models\NapiArak;
use Illuminate\Http\Request;

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
}
