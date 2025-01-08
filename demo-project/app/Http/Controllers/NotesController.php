<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    //get single notes
    function singleNote($id){
        $note= Notes::find($id);
        return view('layouts.note',['note'=>$note]);
        }
    
         //show all course
       public function allNotes(){
        $notes = Notes::all();  // Fetch all courses
        return view('layouts.notes', ['notes' => $notes]);  // Pass collection as 'courses'
        }
}
