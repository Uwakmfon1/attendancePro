<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function store()
    {
        if (Auth::check()) {
            return redirect('/index');
        }
        return redirect('/signin');
    }

    public function index()
    {
        echo "Welcome " . Auth::user();
    }

}
