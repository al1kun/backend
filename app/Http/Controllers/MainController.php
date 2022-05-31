<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller{

    public function home(){
        return view('pages.home');
    }

    public function about(){
        return view('pages.about');
    }

    public function review(){
        return view('pages.review');
    }

    public function reg(){
        return view('pages.reg');
    }

    public function login(){
        return view('pages.login');
    }

    public function review_check(Request $request){
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:15|max:500',
        ]);
    }
}

