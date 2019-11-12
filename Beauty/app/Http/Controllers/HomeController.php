<?php

namespace App\Http\Controllers;
use App\Game;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('home');
    }

    public function main()
    {
        $games = Game::all();
        return view('main',['games'=>$games]);
    }
}
