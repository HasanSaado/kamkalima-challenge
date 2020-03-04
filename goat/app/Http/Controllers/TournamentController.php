<?php

namespace App\Http\Controllers;

use App\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\UsersTournament;
use DB;
use SebastianBergmann\Environment\Console;

class TournamentController extends Controller
{
    public function create(Request $request)
    {
        $key = md5(microtime() . rand());
        $tournament = new Tournament();
        $tournament->tournament_userid = Auth::id();
        $tournament->tournament_key = $key;
        $tournament->tournament_name = $request['tournament_name'];
        $tournament->save();
        $users_tournament = new UsersTournament();
        $users_tournament->userstournaments_userid = Auth::id();
        $users_tournament->userstournaments_tournamentid = $tournament->id;
        $users_tournament->save();

    }

    public function all(){
        $users = Auth::user();
        return response()->json(['users' => $users]);
    }

    public function store()
    {
        // $tournament = DB::table("tournaments")->get();
        $tournament = DB::table('tournaments')
        ->join('users','tournament_userid', '=', 'id')
        ->get();
        return response()->json(['tournaments' => $tournament]);
        // return $tournament;  
    }
    
    public function show($id)
    {
        return view('tournamentpage', ['id' => $id]);
    }

    public function chat($id)
    {
        return view('chatroom', ['id' => $id]);
    }


    public function get($id)
    {
        $tournament = DB::table('users_tournaments')
        ->join('users', 'userstournaments_userid', '=', 'id')
        ->where('userstournaments_tournamentid','=', $id)
        ->orderby('user_points','desc')
        ->get();
        return response()->json(['tournament' => $tournament]);
    }
}
