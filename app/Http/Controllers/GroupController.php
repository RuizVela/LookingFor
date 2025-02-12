<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;
use App\User;

class GroupController extends Controller
{
    public function index()
    {   
        $groups = Group::all();
        return view('Groups.index',['groups'=>$groups]);
    }
    public function create()
    {
        return view('Groups.create');
    }
    public function store(Request $request)
    {
        Group::create($request->all());
        return redirect('group');
    }
    public function show(Group $group)
    {
        $club = $group->club;
        $game = $group->game;
        $admins = $group->getAdmins;
        return view('groups/group',['group'=>$group],['club'=>$club, 'game'=>$game, 'admins'=>$admins]);
    }
    public function edit(Group $group)
    {
        if ($this->authorize('edit', $group)) 
        {
            return view('groups/edit', ['group'=>$group]);
        }
    }
    public function update(Request $request, Group $group)
    {
        $group->update($request->all());
        return redirect("group/$group->id");
    }
    public function destroy(Group $group)
    {
        if ($this->authorize('delete', $group)) 
        {
            $group->delete();
            return redirect('group');
        }
    }
    public function addUser(Group $group, Request $request)
    {
        $group->addUser($request->user_id);
        return redirect("group/$group->id");
    }
    public function deleteUser(Group $group, User $user)
    {
        $group->deleteUser($user->id);
    }
    public function findUser(Group $group, User $user)
    {
        $users = User::all();
        return view('groups.addUser', ['group'=>$group, 'users'=>$users]);
    }
    public function setAdmin(Group $group, User $user)
    {
        $group->setAdmin($user->id);
    }
}


