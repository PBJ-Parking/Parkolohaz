<?php

namespace App\Http\Controllers;

use App\Models\Felhasznalo;
use Illuminate\Http\Request;

class FelhasznaloController extends Controller
{
    public function index(){
        $felhasznalok = response()->json(Felhasznalo::all());
        return $felhasznalok;
    }

    public function show($id){
        $felhasznalo = response()->json(Felhasznalo::find($id));
        return $felhasznalo;
    }

    public function store(Request $request){
        $felhasznalo = new Felhasznalo();
        $felhasznalo->nev = $request->nev;
        $felhasznalo->telefonszam = $request->telefonszam;
        $felhasznalo->cim = $request->cim;
        $felhasznalo->email = $request->email;
        $felhasznalo->jelszo = $request->jelszo;
        $felhasznalo->megrendelo_tipus = $request->megrendelo_tipus;
        $felhasznalo->adoszam = $request->adoszam;
        $felhasznalo->admin_e = $request->admin_e;
        $felhasznalo->save();
    }

    public function update(Request $request, $id){
        $felhasznalo = Felhasznalo::find($id);
        $felhasznalo->nev = $request->nev;
        $felhasznalo->telefonszam = $request->telefonszam;
        $felhasznalo->cim = $request->cim;
        $felhasznalo->email = $request->email;
        $felhasznalo->jelszo = $request->jelszo;
        $felhasznalo->megrendelo_tipus = $request->megrendelo_tipus;
        $felhasznalo->adoszam = $request->adoszam;
        $felhasznalo->admin_e = $request->admin_e;
        $felhasznalo->save();
    }
    public function destroy($id)
    {
        Felhasznalo::find($id)->delete();
    }
}
