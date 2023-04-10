<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        return view('main-index',[
            'title' => '',
            'description' => '',
            'image' => 'http://via.placeholder.com/1920x1080'
        ]);
    }
    public function kovri(){
        return view('kovri');
    }
    public function mebel(){
        return view('mebel');
    }

    public function contact(){
        return view('contact');
    }
    public function calculator(){
        return view('calculator');
    }
}
