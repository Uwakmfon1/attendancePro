<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use App\Models\Courses;
use Illuminate\View\View;

$count = DB::table('students')->get();
//dd($count);
//header('Content-type: application/json');

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
        $count = DB::table('students')->get();
        return view('attendance.index',[
            'count'=> $count
        ]);
    }

    public function getStudent()
    {
        $count = DB::table('students')->get();
        return view('attendance.index', [
            'count' => $count
        ]);
    }


    public function takeAttendance():View
    {
        $count = DB::table('students')->get();

        return view('attendance.attendanceDate',[
            'count'=>DB::table('students')->orderBy('id','asc')->simplePaginate(1)
        ]);
    }

    public function attendance():View
    {
        $count = DB::table('students')->get();
//        dd($count);
        return view('attendance.attendance',[
            'count'=>DB::table('students')->orderBy('id','asc')->simplePaginate(1)
        ]);
    }

}

