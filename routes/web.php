<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'store']);

Route::get('/index', [HomeController::class, 'index']);

Route::get('/signup', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/signup', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/sign-in', [SessionsController::class,'create'])->middleware('guest');
Route::post('/sign-in',[SessionsController::class,'store'])->middleware('guest');

Route::get('/home' ,[SessionsController::class,'view'])->middleware('auth');
Route::get('/register-courses' ,[RegisterController::class,'registerCourses'])->middleware('auth');
Route::post('/create-course' ,[RegisterController::class,'createCourse'])->middleware('auth');

Route::get('/logout',[SessionsController::class,'destroy'])->middleware('auth');
Route::get('/get-page/{id}',[Sessionscontroller::class, 'getPage']);
Route::get('/get-page/{id}/take-attendance',[Sessionscontroller::class, 'takeAttendance']);

//Route::get('/take-attendance',[SessionsController::class,'takeAttendance']);
Route::get('/get-student',[SessionsController::class,'getStudent']);
Route::post('/attendance',[SessionsController::class,'index']);

