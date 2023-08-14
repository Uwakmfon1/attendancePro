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

$count = DB::table('students')->get();
//dd($count);
//header('Content-type: application/json');

class SessionsController extends Controller
{

    public function index(Request $request)
    {

        $request->validate([
            'date' => ['required', 'date'],
            'attendance' => ['required', 'array'],
        ]);


        $attendance = $request->get('attendance');


        foreach ($attendance as $index => $record) {
            Attendance::query()->updateOrCreate([
                'date' => $request->get('date'),
                'student_id' => $index,
            ], [
                'present' => $record === 'present',
            ]);

        }

        return back()->with('message', 'Attendance recorded.');


        if (isset($_POST['submit'])) {
            if (!empty($_POST['radio'])) {
//                echo '  ' . $_POST['radio'];
                echo 'welcome to rjh==';
            } else {
                echo 'Please select the value.';
            }
        }
        //$sql = "INSERT INTO `attendance` (`id`, `student_id`, `present`, `created_at`, `updated_at`) VALUES
        //(1, 5, 1, '2023-08-14 15:25:50', '2023-08-14 15:25:50')";
//        return $request->all();
    }

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
        return view('attendance.index', [
            'count' => $count
        ]);
    }

    public function getStudent()
    {
        $count = DB::table('students')->get();
        return view('attendance.index', [
            'count' => $count
        ]);
    }


    public function takeAttendance(): View
    {
        $students = Students::query()->with('todays_attendance')->get();

        $date = date('Y-m-d');

        return view('attendance.attendance', [
            'students' => $students,
            'date' => $date
        ]);
    }

    public function attendance()
    {
        dd($_POST);
//        $gender = $_GET['gender'];
//        this is where the code goes
//        return view();
        echo $name;
    }

}

