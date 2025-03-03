<?php

namespace App\Http\Controllers;

use App\Models\WhiteBoard;
use App\Models\WhiteBoardDimension;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function homepage()
    {
        $white_boards = WhiteBoard::all();
        $white_board_dimensions = WhiteBoardDimension::all();
        return view('welcome',compact('white_boards','white_board_dimensions'));
    }
}

