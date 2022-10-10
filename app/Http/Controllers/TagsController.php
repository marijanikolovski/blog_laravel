<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagsController extends Controller
{
    public function getRouteKeyName()
    {
        return 'name';
    }

    public function index(Tag $tag)
    {
        $posts = $tag->posts;

        return view('blog.index', compact('posts'));
    }
}
