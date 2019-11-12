<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable =[
        'name'
    ];
    public function offers(){
        return $this->hasMany('App\Offer');
    }

    public function groups(){
        return $this->hasMany('App\Group');
    }
}
