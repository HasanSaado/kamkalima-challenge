<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;
use App\Player;
use App\Team;
use DB;

class PositionController extends Controller
{
    public function create()
    {
        $goalkeepers = DB::table('positions')
        ->leftjoin('players', 'position_id', '=', 'player_positionID')
        ->leftjoin('teams', 'player_teamID', '=', 'team_id')     
        ->where('position_id',"=",'1')
        ->get();
        
        $defenders = DB::table('positions')
        ->leftjoin('players', 'position_id', '=', 'player_positionID')
        ->leftjoin('teams', 'player_teamID', '=', 'team_id')     
        ->where('position_id',"=",'2')
        ->get();

        $midfielders = DB::table('positions')
        ->leftjoin('players', 'position_id', '=', 'player_positionID')
        ->leftjoin('teams', 'player_teamID', '=', 'team_id')     
        ->where('position_id',"=",'3')
        ->get();

        $forwards = DB::table('positions')
        ->leftjoin('players', 'position_id', '=', 'player_positionID')
        ->leftjoin('teams', 'player_teamID', '=', 'team_id')     
        ->where('position_id',"=",'4')
        ->get();

        return response()->json(['goalkeepers' => $goalkeepers, 'defenders' => $defenders, 'midfielders' => $midfielders, 'forwards' => $forwards]);
    }

    function add_position(){
        $curl = curl_init();

        curl_setopt_array($curl, array(

            CURLOPT_URL => "https://fantasy.premierleague.com/api/bootstrap-static/",

            CURLOPT_RETURNTRANSFER => true,

            CURLOPT_ENCODING => "",

            CURLOPT_TIMEOUT => 30000,

            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

            CURLOPT_CUSTOMREQUEST => "GET",

            CURLOPT_HTTPHEADER => array(

                // Set Here Your Requesred Headers

                'Content-Type: application/json',

            ),

        ));

        $response = curl_exec($curl);

        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {

            echo "cURL Error #:" . $err;
        } else {

            //var_dump($response[0]["total_players"]);

            $someArray = json_decode($response, true);



            for ($i = 0; $i < count($someArray['element_types']); $i++) {
                $row = new Position();
                $row->position_name = $someArray["element_types"][$i]["plural_name"];
                // and so on for your all columns
                $row->save();   //at last save into db
            }
        }
    }
}
