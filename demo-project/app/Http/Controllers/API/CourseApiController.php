<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
            'description' => 'required|string',
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
        if(!`$course`){
            return response()->json(['message'=>'Course not found'],Response::HTTP_NOT_FOUND);
        }
        return response()->json($course);
    }

    //Updating data 
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        if(!$course){
            return response()->json(['message'=>'Course not found'],Response::HTTP_NOT_FOUND);
        }
        $validatedData = $request->validate([
            'course' => 'string|max:255',
            'description' => 'string',
        ]);
        $course->fill($request->all());
        $course->save();
        return response()->json(['message'=>'Course has been updated succesfully','course'=>$course],Response::HTTP_OK);
    }

    //Deleting data
    public function destroy($id)
    {
        $course = Course::find($id);
        if(!$course){
            return response()->json(['message'=>'Course not found'],Response::HTTP_NOT_FOUND);
        }
        $course->delete();
        return response()->json(['message'=>'Course has been deleted succesfully'],Response::HTTP_OK);
    }


    //Getting all data
    public function index()
    {
        return Course::all();
        return response()->json($courses);
    }
}
