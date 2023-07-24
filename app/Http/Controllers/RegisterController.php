<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255',
        ]);

        $attributes['password'] = Hash::make($attributes['password']);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/home')->with('success', 'your account has been created');
    }

    public function registerCourses()
    {
        return view('courses.create');
    }

    public function createCourse()
    {
        $results  = request->validate([

        ]);
        echo 'Course created successfully';
    }
}
