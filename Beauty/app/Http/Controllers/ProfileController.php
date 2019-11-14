<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Group;

class ProfileController extends Controller
{
    public function index()
    {   
        $profiles = User::all();
        return view('profiles/index',['profiles'=>$profiles]); 
    }
    public function show(User $user)
    {
        $groups = $user->groups;
       return view('profiles/profile',['user'=>$user],['groups'=>$groups]);
    }
    public function edit(User $profile)
    {   if($this->authorize('edit',$profile))
        {
            return view('profiles/edit',['user'=>$profile]);
        }
    }
    public function update(Request $request, User $profile)
    {
        $profile->update($request->all());
        return redirect("profile/$profile->id");
    }
    public function findGroup(User $user)
    {   
        $groups = auth()->user()->getAdmins;
        return view('profiles/addToGroup', ['user'=>$user], ['groups'=>$groups]);
    }
    public function addToGroup(User $user, Request $request)
    {
        $user->addToGroup($request->group_id);
        return redirect("profile");
    }
    public function detachGroup(User $user, Request $request)
    {   
        $user->deleteFromGroup($request->group_id);
        return redirect("profile");
    }
    public function kickFromGroup(User $user)
    {
        $groups = $user->groups;
        return view('profiles/kickFromGroup', ['user'=>$user], ['groups'=>$groups]);
    }
}