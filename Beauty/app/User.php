<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'name', 'email', 'password', 'description'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function clubs()
    {
        return $this->belongsToMany('App\Club');
    }
    public function groups()
    {
        return $this->belongsToMany('App\Group')->withPivot('admin');
    }
    public function offers()
    {
        return $this->hasMany('App\Offer');
    }
    public function answer()
    {
        return $this->hasMany('App\Answer');
    }
    public function getAdmins()
    {
        $admins = $this->groups()->where('admin',true);
        return $admins;
    }
    public function addToGroup($groupId)
    {
        $this->groups()->attach($groupId);
    }
    public function deleteFromGroup($groupId)
    {
        $this->groups()->detach($groupId);
    }
    public function comments()
    {
        return $this->hasMany('App\Comment','profile_id');
    }
}