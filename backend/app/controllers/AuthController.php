<?php

namespace App\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController
{
    public function register(Request $request)
    {
        // Validate the registration data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
            // Add more validation rules 
        ]);

        // Create a new user
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        // Add more fields as needed
        $user->save();

        // Authenticate the user
        Auth::login($user);

        // Redirect to a specific route or return a response 
    }

    public function login(Request $request)
    {
        // Validate the login data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Attempt to authenticate the user
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication successful
            // Redirect to a specific route or return a response 
        } else {
            // Authentication failed
            // Redirect back with an error message or return a response 
        }
    }

    public function logout()
    {
        // Log out the authenticated user
        Auth::logout();

        // Redirect to a specific route or return a response 
    }
}
