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
    public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('admin');
    }
    public function addUser($userId)
    {
        $this->users()->attach($userId);
    }
    public function deleteUser($userId)
    {
        $this->users()->detach($userId);
    }
}
