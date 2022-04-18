<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required|max:100',
            'username' => 'required|min:3|max:100|unique:users',
            'email' => 'required|email:dns|max:100|unique:users',
            'password' => 'required|min:5|max:100'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success', 'Registration successfull! Please login');

       return view('login');
    }
}
