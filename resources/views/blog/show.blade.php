@extends('layouts.master')

@yield('title', 'Posts')

@section('content')
    <article class="blog-post">
        <h2 class="blog-post-title mb-1">{{ $post->title }}</h2>
        <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>
        <p>{{ $post->body }}</p>
    </article>

    <h4>Comments:</h4>
    <ul>
        @foreach ($post->comments as $comment)
            <li>
                {{ $comment->body }}
            </li>
        @endforeach
    </ul>

    <form method="POST" action="/posts/{{ $post->id }}/comments">
        @csrf

        <div class="mb-3">
            <label class="form-label" >Leave a comment</label>
            <textarea class="form-control" name="body" rows="2" ></textarea>
        </div>

        @error('body')
            @include('partials.error')
        @enderror

        <button type="submit" class="btn brn-primary">Submit</button>
    </form>
@endsection