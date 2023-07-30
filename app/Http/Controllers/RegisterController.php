<?php

namespace App\Http\Controllers;

session_start();


use App\Models\User;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

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


//->where('subscriptionPlan', function($query) use($activated){
//                        $query->where('activated', '=', $roleId);
//                    })


    public function createCourse()
    {
        $results = request()->validate([
            'course_title' => 'required',
            'course_code' => 'required',
        ]);
        $results['user_id'] = Auth::id();
        $results['course_code'] = strtoupper($results['course_code']);
        $results['course_title'] = strtoupper($results['course_title']);


//       it is here you'll write the if statement for not duplicating the courses

        if (Courses::query()->where('course_code', $results['course_code'])->exists()) {
            return Redirect::back()->withErrors(['error' => 'Another subject with this course code already exist.']);
//            return redirect('/register-courses')->with(['error' => 'Another subject with this course code already exist.']);
        }


        if (Courses::query()->where('course_title', $results['course_title'])->exists()) {
            return Redirect::back()->withErrors(['error' => 'This course title already exist.']);
        }

        $result = Courses::create($results);
        return redirect('/home');
    }



}


