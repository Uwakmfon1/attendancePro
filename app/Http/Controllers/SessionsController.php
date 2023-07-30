<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use App\Models\Courses;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($attributes)) {
            return redirect('/home')->with('success', 'Welcome Back');
//            session()->regenerate();
        }

        throw ValidationException::withMessages([
            'email' => 'Your Provided credentials could not be validated'
        ]);
    }

    public function view()
    {
        $courses = Courses::where('user_id', Auth::id())->pluck('course_title');
        return view('sessions.index', ['courses' => $courses]);

    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'GoodBye');
    }

    public function getPage()
    {
//        $course=
        return view('attendance.index');
    }

    public function getStudent()
    {
//        $count = Students::count();
        $count = DB::table('students')
            ->get();
//    dd($count);
//        foreach ($count as $item => $items) {
//            dd($item);
//        }

        foreach ($count as $key) {
            dd($count);
//            if (is_array($value)) {
                foreach ($value as $key1 => $val) {
//                    dd($val);
//                    print_r(json_encode($val));
//                    print_r($val);
                }
            }
//        }

//        echo 'welcome to this student page';
    }

}
