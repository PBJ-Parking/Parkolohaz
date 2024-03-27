<?php

namespace App\Http\Controllers;

use App\Models\Parkolohely;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $parkolohely->emelet = $request->emelet;
        $parkolohely->save();
    }

    public function update(Request $request, $id)
    {
        $parkolohely = Parkolohely::find($id);
        $parkolohely->hely_tipusa = $request->hely_tipusa;
        $parkolohely->statusz = $request->statusz;
        $parkolohely->emelet = $request->emelet;
        $parkolohely->save();
    }
    public function destroy($id)
    {
        Parkolohely::find($id)->delete();
    }

    public function rules()
    {
        return [
            'emelet' => 'required|integer|between:1,3',
        ];
    }


    public function parkolohely_statusz($statusz)
    {
        return DB::select("
        SELECT * FROM parkolohely
        where statusz = ?;
        ", [$statusz]);
    }

    public function elsoEmelet()
    {
        return DB::select("
        Select * from parkolohely
        where emelet = 1");
    }
    public function masodikEmelet()
    {
        return DB::select("
        Select * from parkolohely
        where emelet = 2");
    }
    public function harmadikEmelet()
    {
        return DB::select("
        Select * from parkolohely
        where emelet = 3");
    }
}
