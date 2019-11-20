<?php

namespace App\Http\Controllers;

use App\Club;
use Illuminate\Http\Request;
use App\User;
use App\Group;

class ClubController extends Controller
{
    public function index()
    {
        $clubs= Club::all();
        return view('clubs.index',['clubs'=>$clubs]);
    }
    public function create()
    {
        return view('clubs.create');
    }
    public function store(Request $request)
    {
        Club::create($request->all());
        return redirect('club');
    }
    public function show(Club $club)
    {
        $groups = $club->groups;
        return view('clubs/club',['club'=>$club],['groups'=>$groups]);
    }
    public function edit(Club $club)
    {
        if ($this->authorize('edit', $club)) 
        {
            return view('clubs.edit', ['club'=>$club]);
        }
    }
    public function update(Request $request, Club $club)
    {
        $club->update($request->all());
        return redirect("club/$club->id");
    }
    public function destroy(Club $club)
    {
        if ($this->authorize('edit', $club)) 
        {
            $club->delete();
            redirect('club');
        }
    }
    public function addUser(Club $club, Request $request)
    {
        $club->addUser($request->user_id);
        return redirect("club/$club->id");
    }
    public function findUser(Club $club)
    {
        if ($this->authorize('edit', $club)) 
        {
            $users = User::all();
            return view('clubs.addUser', ['club'=>$club, 'users'=>$users]);
        }
    }
    public function deleteUser(Club $club, User $user)
    {
        $club->deleteUser($user->id);
    }

    public function findGroup(Club $club)
    {
        if ($this->authorize('edit', $club)) 
        {
            $groups = $club->getGroupsWithoutClub();
            return view('clubs.addGroup', ['club'=>$club, 'groups'=>$groups]);
        }
    }
    public function addGroup(Request $request, Club $club) 
    {
        $club->addGroup($request->group_id);
        return redirect("club/$club->id");
    }
}
