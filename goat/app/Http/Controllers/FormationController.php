<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formation;
use App\Player;
use Illuminate\Support\Facades\Auth;
use DB;

class FormationController extends Controller

{
    public function create(){

        $formations = Formation::select('formation_playerID')->where(['formation_userID' => auth()->id()])->get();
        return response()->json(array('formations' => $formations));
        return $formations;
    }

    public function store(Request $request){

        for ($i = 0; $i < count($request['formation']); $i++) {
        $formation = new Formation();
        $formation->formation_userid = Auth::id();
        $formation->formation_playerid = $request['formation'][$i];
        $formation->save();
        }
        // return route('create');
    }

        

    public function destroy($id){

        $destroy = DB::table('formations')->where('id',$id)->delete();
        return $destroy;
    }
}
