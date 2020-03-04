<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function position(){

        return $this->belongsTo('App\Position','player_positionID','position_id');
    }

    public function users(){
        
        return $this->belongsToMany(User::class, 'formations');
    }

    public function team(){

        return $this->belongsTo('App\Team','player_teamID','team_id');
    }
}
