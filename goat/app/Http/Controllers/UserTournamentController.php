<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\UsersTournament;
use Illuminate\Http\Request;

class UserTournamentController extends Controller
{
    public function store(Request $request){

        $users_tournament = new UsersTournament();
        $users_tournament->userstournaments_userid = Auth::id();
        $users_tournament->userstournaments_tournamentid = $request['joined_tournament'];
        $users_tournament->save();
        // return route('create');
    }
}
