<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $title = 'Home';
        $tagline = 'Best Wedding Photography';
        return view('index',compact('title', 'tagline'));
    }

    public function about(){
        $title = 'About';
        $tagline = 'Best Wedding Photography';
        return view('about',compact('title', 'tagline'));
    }

    public function blog(){
        $title = 'Blog';
        $tagline = 'Best Wedding Photography';
        return view('blog',compact('title', 'tagline'));
    }

    public function contact(){
        $title = 'Contact';
        $tagline = 'Best Wedding Photography';
        return view('contact',compact('title', 'tagline'));
    }

    public function edit(){
        $title = 'Edit';
        $tagline = 'Best Wedding Photography';
        return view('edit',compact('title', 'tagline'));
    }
}
