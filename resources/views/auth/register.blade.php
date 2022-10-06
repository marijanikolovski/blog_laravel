@extends('layouts.master')

@section('title', 'Register')

@section('content')
    <form method="POST" action="/register">
        @csrf

        <div class="mb-3">
            <label class="form-label" >Name</label>
            <input class="form-control" type="text" name="name" />
        </div>

        @error('name')
            @include('partials.error')
        @enderror

        
        <div class="mb-3">
            <label class="form-label" >Email</label>
            <input class="form-control" type="emil" name="email" />
        </div>

        @error('email')
            @include('partials.error')
        @enderror

        <div class="mb-3">
            <label class="form-label" >Password</label>
            <input class="form-control" type="password" name="password" />
        </div>

        @error('password')
            @include('partials.error')
        @enderror

        <button type="submit" class="btn brn-primary">Submit</button>
    </form>
@endsection