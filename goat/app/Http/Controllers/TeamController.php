<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Team;

class TeamController extends Controller
{
    function add_team(){
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



            for ($i = 0; $i < count($someArray['teams']); $i++) {
                $row = new Team();
                $row->team_name = $someArray["teams"][$i]["name"];
                $row->team_shortname = $someArray["teams"][$i]["short_name"];
                // and so on for your all columns
                $row->save();   //at last save into db
            }
        }
    }
}
