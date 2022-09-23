<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');

    }
    public function about(){
        return view('about');

    }
    public function contact(){
        return view('contact');
    }
    public function primary(){
        return view('primary');
    }
    public function secondary(){
        return view('secondary');
    }
    public function admission(){
        return view('admission');
    }
    public function blog(){
        return view('blog');
    }
}
