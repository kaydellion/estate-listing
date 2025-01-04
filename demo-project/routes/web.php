<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('home'); });
Route::get('/unathorized', function () {return view('404');});
Route::get('/user', function () {return view('user');});
Route::get('/profile', function () {return view('layouts.profile');});
Route::get('/dashboard', function () {return view('layouts.home');});
Route::get('/user/{id}', function ($id) {return "user $id";});
Route::get('user/{id}/{new}',[UserController::class,'getUser']);
Route::get('/course', [CourseController::class,'allCourses']);
Route::get('course/{id}',[CourseController::class,'singleCourse'])->middleware('checkheaders');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

