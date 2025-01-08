<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    //get single notes
    function getUser($id){
        $note= Notes::find($id);
        return view('layouts.note',['note'=>$note]);
        }
    
         //show all course
       public function allCourses(){
        $notes = Notes::all();  // Fetch all courses
        return view('layouts.notes', ['courses' => $notes]);  // Pass collection as 'courses'
        }
}
