<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $felhasznalok = response()->json(User::all());
        return $felhasznalok;
    }

    public function show($id){
        $felhasznalo = response()->json(User::find($id));
        return $felhasznalo;
    }

    public function store(Request $request){
        $felhasznalo = new User();
        $felhasznalo->name = $request->name;
        $felhasznalo->telefonszam = $request->telefonszam;
        $felhasznalo->cim = $request->cim;
        $felhasznalo->email = $request->email;
        $felhasznalo->password = $request->password;
        $felhasznalo->megrendelo_tipus = $request->megrendelo_tipus;
        $felhasznalo->adoszam = $request->adoszam;
        $felhasznalo->admin_e = $request->admin_e;
        $felhasznalo->save();
    }

    public function update(Request $request, $id){
        $felhasznalo = User::find($id);
        $felhasznalo->name = $request->name;
        $felhasznalo->telefonszam = $request->telefonszam;
        $felhasznalo->cim = $request->cim;
        $felhasznalo->email = $request->email;
        $felhasznalo->password = $request->password;
        $felhasznalo->megrendelo_tipus = $request->megrendelo_tipus;
        $felhasznalo->adoszam = $request->adoszam;
        $felhasznalo->admin_e = $request->admin_e;
        $felhasznalo->save();
    }
    public function destroy($id)
    {
        User::find($id)->delete();
    }

    public function authUser(){
        $felhasznalo = auth()->user();
        return $felhasznalo;
    }
}
