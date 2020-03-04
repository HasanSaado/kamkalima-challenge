<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function player(){
        return $this->hasMany('App\Player','player_positionID','position_id');
    }

    public function team(){
        return $this->hasMany('App\Player','player_teamID','team_id');
    }
}
