<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];
    public function groups(){
        return $this->hasMany('App\Group');
    }
}
