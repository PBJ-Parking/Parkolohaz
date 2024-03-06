<?php

namespace App\Http\Controllers;

use App\Models\Parkolohely;
use Illuminate\Http\Request;

class ParkolohelyController extends Controller
{
    public function index()
    {
        $parkolohelyek = response()->json(Parkolohely::all());
        return $parkolohelyek;
    }

    public function show($id)
    {
        $parkolohely = response()->json(Parkolohely::find($id));
        return $parkolohely;
    }

    public function store(Request $request)
    {
        $parkolohely = new Parkolohely();
        $parkolohely->hely_tipusa = $request->hely_tipusa;
        $parkolohely->statusz = $request->statusz;
        $parkolohely->save();
    }

    public function update(Request $request, $id)
    {
        $parkolohely = Parkolohely::find($id);
        $parkolohely->hely_tipusa = $request->hely_tipusa;
        $parkolohely->statusz = $request->statusz;
        $parkolohely->save();
    }
    public function destroy($id)
    {
        Parkolohely::find($id)->delete();
    }
}
