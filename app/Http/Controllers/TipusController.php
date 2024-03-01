<?php

namespace App\Http\Controllers;

use App\Models\Tipus;
use Illuminate\Http\Request;

class TipusController extends Controller
{
    public function index()
    {
        $tipusok = response()->json(Tipus::all());
        return $tipusok;
    }

    public function show($id)
    {
        $tipus = response()->json(Tipus::find($id));
        return $tipus;
    }

    public function store(Request $request)
    {
        $tipus = new Tipus();
        $tipus->elnevezes = $request->elnevezes;
        $tipus->save();
    }

    public function update(Request $request, $id)
    {
        $tipus = Tipus::find($id);
        $tipus->elnevezes = $request->elnevezes;
        $tipus->save();
    }
    public function destroy($id)
    {
        Tipus::find($id)->delete();
    }
}
