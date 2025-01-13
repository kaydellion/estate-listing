<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
Use App\Models\Course;

class CourseApiController extends Controller
{
    //GET, POST, PUT, DELETE (FETCH, ADD, UPDATE, DELETE)
    
    //adding data
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'course' => 'required|string|max:255',
            'description' => 'required|string|max',
        ]);

        $course = new Course();
        $course->course = $validatedData['course'];
        $course->description = $validatedData['description'];
        $course->save();
        return response()->json(['message'=>'Course has been added succesfully','course'=>$course],201);
    }

    //Getting single data
    public function show($id)
    {
        return Course::find($id);
        return response()->json($course);
    }

    //Updating data
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $course->course = $request->course;
        $course->description = $request->description;
        $course->save();
        return response()->json($course);
    }

    //Deleting data
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        return response()->json(null);
    }


    //Getting all data
    public function index()
    {
        return Course::all();
    }
}
