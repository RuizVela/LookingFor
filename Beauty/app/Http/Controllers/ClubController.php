<?php

namespace App\Http\Controllers;

use App\Club;
use Illuminate\Http\Request;

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
        return view('clubs/club',['club'=>$club]);
    }
    public function edit(Club $club)
    {
        //
    }
    public function update(Request $request, Club $club)
    {
        //
    }
    public function destroy(Club $club)
    {
        //
    }
}
