<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create() {

        return view('auth.register');
    }

    public function store(CreateUserRequest $request)
    {
        $validated = $request->validated();

    User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => $validated['password']
    ]);

        auth()->login(new User());

        return redirect('/posts');
    }
}
