@extends('layouts.master')

@section('title', 'Posts')

@section('content')
    <article class="blog-post">
        <h2 class="blog-post-title mb-1">{{ $post->title }}</h2>
        @if ($post->user)
            <a href="/users/{{ $post->user->id }}">{{ $post->user->name }}</a>
    @else
        {{ 'Anon' }}
    @endif

    @if (count($post->tags))
        <ul>
            @foreach ($post->tags as $tag)
                <li>
                    <a href="/posts/tags/{{ $tag->name }}">{{ $tag->name }}</a>
                </li>
            @endforeach
        </ul>
    @endif

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