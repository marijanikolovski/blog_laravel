<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCommentRequest;
use App\Models\Post;

class CommentsController extends Controller
{
    public function store(CreateCommentRequest $request, $id)    // id post
    {
        Post::find($id)->addComment($request->validated()['body']);

        return redirect()->back();
    }

    public function addComment($body)
    {
        $this->comments()->create([    
            'body' => $body
        ]);
    }

}
