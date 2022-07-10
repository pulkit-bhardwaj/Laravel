<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Post;
use \App\Models\Category;

class PostsController extends Controller
{
public function index()
{
    $posts = Post::latest()->paginate(10);
    $cats = Category::pluck('name', 'id');
    return view('admin/index', compact('posts', 'cats'));
}

public function create()
{
    $categories = Category::pluck('name', 'id');
    return view('admin/create', compact('categories'));

}

public function store(Request $request)
    {

        $valid = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|integer'
        ]);

        $valid['image'] = "https://via.placeholder.com/900x400.png/004477?text=rerum";

        Post::create($valid);

        session()->flash('success', 'Book successfully created!');
        
        return redirect('/admin/posts');


    }

}