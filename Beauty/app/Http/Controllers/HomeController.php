<?php

namespace App\Http\Controllers;
use App\Game;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function main()
    {
        $games = Game::all();
        return view('main',['games'=>$games]);
    }
}
