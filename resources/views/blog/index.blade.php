@extends('layouts.master')

@yield('title', 'Post')

@section('content')
    <article class="blog-post">
        @foreach ($posts as $post)
            <h2 class="blog-post-title mb-1"><a href="{{ route('blog-index', ['id' => $post->id]) }}">{{ $post->title }}</a></h2>
            <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>
        @endforeach
    </article>
@endsection
