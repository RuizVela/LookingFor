<?php

namespace App\Http\Controllers;

use App\Club;
use App\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{

    public function index()
    {
        $game=Game::all();
        return view('games.index',['games'=>$game]);

    }
    public function create()
    {
        return view('games.create');
    }
    public function store(Request $request)
    {
        Game::create($request->all());
        return redirect('game');
    }
    public function show(Game $game)
    {
        return view('games.game',['game'=>$game]);
    }
    public function edit(Game $game)
    {
        return view('games.edit',['game'=>$game]);
    }
    public function update(Request $request, Game $game)
    {
        $game->update($request->all());
        return redirect("game/$game->id");
    }
    public function destroy(Game $game)
    {
        $game->delete();
            redirect('game');
    }
    public function gameGroupOffers(Game $game)
    {
        $gameGroupOffers = $game->offers->where('group_offer',true);    
        return view('games.offers',['gameGroupOffers'=>$gameGroupOffers,'game'=>$game]);
    }
}
