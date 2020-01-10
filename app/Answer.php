<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'body',
        'user_id',
        'offer_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function offer()
    {
        return $this->belongsTo('App\Offer');
    }
}
