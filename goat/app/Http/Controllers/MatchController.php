<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchController extends Controller
{
    function get_matches(){
        $curl = curl_init();

        curl_setopt_array($curl, array(

            CURLOPT_URL => "https://livescore-api.com/api-client/fixtures/matches.json?key=fAoPsAaNtNxpNbHL&secret=6DUDQxjRmejN95EoG3e8DoW7cuwZFeLL&round=22&competition_id=2",

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
            return response()->json(['matches' => $someArray]);

        }
    }
}
