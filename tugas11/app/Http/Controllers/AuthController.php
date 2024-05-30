<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view('pages.register');
    }
    public function store(Request $request){
        $fname = $request ['fname'];
        $lname = $request ['lname'];


        return view('pages.home',['fname' => $fname, 'lname'=> $lname]);
    }
}
