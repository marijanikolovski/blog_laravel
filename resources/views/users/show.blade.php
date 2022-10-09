@extends('layouts.master')

@section('title', $user->name)
{{-- $users --}}

@section('content')
    <main role="main" class="container">
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">{{ $user->name }}</h1>
            </div>
        </div>          
        <ul>
            @foreach ($user->posts as $post)
                <h2>
                    <li>
                        <a href="{{ route('blog-index', ['id' => $post->id ]) }}">
                            {{ $post->title }}
                        </a>
                    </li>
                    
                </h2>
            @endforeach
        </ul>
    </main><!-- /.container -->

@endsection