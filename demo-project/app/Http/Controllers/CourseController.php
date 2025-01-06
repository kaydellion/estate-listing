<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    //show all course
    public function allCourses(){
    $courses = Course::all();  // Fetch all courses
    return view('layouts.course', ['courses' => $courses]);  // Pass collection as 'courses'
    }


    //show single course
    function singleCourse($id){
    $course= Course::find($id);
    return view('layouts.single-course',['course'=>$course]);
    }
}
