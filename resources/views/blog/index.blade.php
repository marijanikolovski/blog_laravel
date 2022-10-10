@extends('layouts.master')

@section('title', 'Posts')

@section('content')
    <article class="blog-post">
        @foreach ($posts as $post)
            <h2 class="blog-post-title mb-1"><a href="{{ route('blog-index', ['id' => $post->id]) }}">{{ $post->title }}</a></h2>
            <p>{{ $post->created_at }} by {{ $post->user ? $post->user->name : 'Anonims'}}</p>
        @endforeach

        {{ $posts->links() }}
    </article>
@endsection
