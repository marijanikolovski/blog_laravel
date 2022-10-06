@extends('layouts.master')

@section('title', 'Login')

@section('content')
    <form method="POST" action="/login">
        @csrf

        <div class="mb-3">
            <label class="form-label" >Email</label>
            <input class="form-control" type="emil" name="email" />
        </div>

        <div class="mb-3">
            <label class="form-label" >Password</label>
            <input class="form-control" type="password" name="password" />
        </div>

        @error('messageexcept')
            @include('partials.error')
        @enderror

        <button type="submit" class="btn brn-primary">Login</button>
    </form>
@endsection