<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Null_;

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
    public function getAdmins()
    {
        $admins = $this->users()->where('admin',true);
        return $admins;
    }
    public function getGroupsWithoutClub()
    {
        $groups = Group::all()->where('club_id',null);
        return $groups;
    }
    public function addGroup($groupId)
    {
        $group = Group::find($groupId);
        $group->club_id = $this->id;
        $group->save();
    }
}
