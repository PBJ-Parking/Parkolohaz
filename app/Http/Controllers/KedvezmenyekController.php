<?php

namespace App\Http\Controllers;

use App\Models\Kedvezmenyek;
use Illuminate\Http\Request;

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
        $kedvezmeny->mikortol = $request->mikortol;
        $kedvezmeny->merteke = $request->merteke;
        $kedvezmeny->save();
    }

    public function update(Request $request, $id)
    {
        $kedvezmeny = Kedvezmenyek::find($id);
        $kedvezmeny->megnevezes = $request->megnevezes;
        $kedvezmeny->hatartol = $request->hatartol;
        $kedvezmeny->mikortol = $request->mikortol;
        $kedvezmeny->merteke = $request->merteke;
        $kedvezmeny->save();
    }
    public function destroy($id)
    {
        Kedvezmenyek::find($id)->delete();
    }

}
