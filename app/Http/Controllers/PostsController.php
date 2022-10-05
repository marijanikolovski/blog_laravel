<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index() 
    {
        $posts = Post::all();

        return view('blog.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('blog.show', compact('post'));
    }


}
