<?php

namespace App\Http\Controllers;
use \App\Models\Show;
class ShowsController extends Controller

/**
 * Main Controller for front-end
 */
{
    public function index()
    {
        $title = 'One Piece';
        $shows = Show::all();
        return view('index', compact('title', 'shows'));
    }
    public function detail($id)
    {
        $title = 'One Piece';
        $show = Show::find($id);
        return view('detail', compact('title', 'show'));
    }
}
