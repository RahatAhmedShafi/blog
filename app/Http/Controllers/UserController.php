<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser(){
        return "Hello User";
    }
      function aboutName($name){
        return "Hello $name";
    }
    function login(){
        return view('login');
    }
    function about(){
        $name="Teachers";
        $users=['John','Doe','Smith'];
        return view('about',['name'=>$name,'users'=>$users]);

    }
    
}
