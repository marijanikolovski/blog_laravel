@extends('layouts.master')

@section('title', 'Create new post')

@section('content')
    <form method="POST" action="/posts">
        @csrf
        
        <div class="mb-3">
            <label class="form-label" >Title</label>
            <input class="form-control" type="text" name="title" />
        </div>

        @error('title')
            @include('partials.error')
        @enderror

        <div class="mb-3">
            <label class="form-label" >Body</label>
            <textarea class="form-control" name="body" rows="10" ></textarea>
        </div>

        @error('title')
            @include('partials.error')
        @enderror


        <button type="submit" class="btn brn-primary">Submit</button>
    </form>
@endsection