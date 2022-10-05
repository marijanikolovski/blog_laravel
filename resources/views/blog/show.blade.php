@extends('layouts.master')

@yield('title', 'Posts')

@section('content')
    <article class="blog-post">
        <h2 class="blog-post-title mb-1">{{ $post->title }}</h2>
        <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>
        <p>{{ $post->body }}</p>
    </article>
@endsection