<?php

namespace App\Http\Controllers;
use vendor\curl\curl\src\Curl;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }
    function curl_get_file_contents($URL)
    {
        $c = curl_init();
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_URL, $URL);
        $contents = curl_exec($c);
        curl_close($c);

        if ($contents) return $contents;
        else return FALSE;
    }
    function api ()
    {
        $curl = new Curl\Curl();
        $json= $curl->get('https://fantasy.premierleague.com/drf/bootstrap-static');
       
            $data = json_decode($json, true);
            return $data;
    }
    

    
}
