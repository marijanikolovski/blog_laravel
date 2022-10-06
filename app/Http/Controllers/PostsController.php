<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }
    
    public function index() 
    {
        $posts = Post::all();

        return view('blog.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::with('comments')->find($id);

        return view('blog.show', compact('post'));
    }

    public function create() 
    {
        return view('blog.create');
    }

    public function store(CreatePostRequest $request) 
    {
        $validated = $request->validated();

        Post::create([
            'title' => $validated['title'],
            'body' => $validated['body'],
        ]);

        return redirect('/posts');
    }
}
