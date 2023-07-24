<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email'=>'required|email',
            'password'=> 'required'
        ]);

        if(auth()->attempt($attributes)){
            session()->regenerate();
            return redirect('/home')->with('success','Welcome Back');
        }

        throw ValidationException::withMessages([
            'email'=>'Your Provided credentials could not be validated'
        ]);
    }

    public function view()
    {
        return view('sessions.index');
    }
    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success','GoodBye');
    }

}
