<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCommentRequest;
use App\Mail\CommentRecived;
use App\Models\Post;
use Illuminate\Support\Facades\Mail;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(CreateCommentRequest $request, $id)    // id post
    {
        $post = Post::find($id);

        $post->addComment($request->validated()['body']);

        if($post->user) {
            Mail::to($post->user)->send(new CommentRecived($post));
        }

        return redirect()->back();
    }

    public function addComment($body)
    {
        $this->comments()->create([    
            'body' => $body
        ]);
    }

}
