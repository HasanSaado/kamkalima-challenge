<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Team;
use App\Position;
use DB;


use function GuzzleHttp\Psr7\str;
use function PHPSTORM_META\map;

class PlayerController extends Controller
{
   
    public function test(){
        $player = DB::select('select player_id as id , player_firstname as content from players;');

        // for ($i=0; $i<count($player); $i++){
        //     $new["$id"] =  
        // }
        // $name=DB::select('select player_firstname from players;');
     

        // for($i=0;$i<count($player);$i++)
        // {
        //     //$name[$i]=explode("id",$name[$i]);
        //     $new_array[] = array($name[$i]); 
        // }
       
        for($i=1;$i<count($player);$i++)
        {
            $name="name".$i;
            $new_array[] = array($name=>$player[$i]); 
        }

        // for ($i=1; $i<count($player); $i++){
        //     $name = 'name'.$i;
        //     // $new = [].'';
        //     $new['$i'] = array($name."" =>  $player[$i]);
        // }


        return json_encode(["players"=>$player]);
          
       
        
    //    return (["pp"=>$new_array]);
    }
   
   
   
    function add_player()
    {
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



            for ($i = 0; $i < count($someArray['elements']); $i++) {
                $row = new Player();
                $row->player_firstname = $someArray["elements"][$i]["first_name"];
                $row->player_secondname = $someArray["elements"][$i]["second_name"];
                $row->player_teamID = $someArray["elements"][$i]["team"];
                $row->player_positionID = $someArray["elements"][$i]["element_type"];
                $row->rating = $someArray["elements"][$i]["total_points"];
                $row->value = $someArray["elements"][$i]["now_cost"];
                // and so on for your all columns
                $row->save();   //at last save into db
            }
        }
    }
}
