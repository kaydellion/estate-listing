<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Faker\Factory as Faker;


class UserController extends Controller
{
    //
    
    function getUser($id){
    $user= User::find($id);
    return view('user.profile',['user'=>$user]);
    }
}
