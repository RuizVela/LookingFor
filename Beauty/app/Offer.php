<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'title', 'description', 'group_offer', 'user_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
    public function game(){
        return $this->belongsTo('App\Game');
    }
}
