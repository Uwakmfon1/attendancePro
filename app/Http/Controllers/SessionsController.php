<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Students;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use App\Models\Courses;
use Illuminate\View\View;
use Illuminate\Http\Request;


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
            session()->regenerate();
            return redirect('/home')->with('success', 'Welcome Back');
        }

        throw ValidationException::withMessages([
            'email' => 'Your Provided credentials could not be validated'
        ]);
    }

    public function view()
    {
        session()->flash('message','successfully logged in');
        $courses = Courses::all()->map->only('user_id','course_title','course_code','id')
            ->where('user_id','=', Auth::id());

        return view('sessions.index', ['courses' => $courses]);
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'GoodBye');
    }



    public function getPage($id)
    {
        $students = DB::table('students')
            ->join('courses_students','students.id','=','courses_students.student_id')
            ->select('students.name', 'students.id','students.RegNo')
            ->where('courses_students.course_id','=',$id)
            ->get();

        return view('attendance.index', [
            'students' => $students,
            'id' => $id
        ]);
    }

    public function getStudent()
    {
        $count = DB::table('students')->get();
        return view('attendance.index', [
            'count' => $count
        ]);
    }


    public function takeAttendance($id)
    {

        $students = Students::query()
            ->join('courses_students','students.id','=','courses_students.student_id')
            ->with('todays_attendance')
            ->where('courses_students.course_id','=',$id)
            ->get();
        $date = date('Y-m-d');

        return view('attendance.attendance', [
            'students' => $students,
            'date' => $date,
            'id'=>$id
        ]);
    }

    public function index(Request $request)
    {
        $request->validate([
            'date' => ['required', 'date'],
            'attendance' => ['required', 'array'],
        ]);

        $attendance = $request
            ->get('attendance');

        foreach ($attendance as $index => $record) {
            Attendance::query()->updateOrCreate([
                'date' => $request->get('date'),
                'student_id' => $index,
                'course_id'=>$request->get('course_id')
            ], [
                'present' => $record === 'present',
            ]);
        }

        return back()->with('message', 'Attendance recorded.');
    }
}
