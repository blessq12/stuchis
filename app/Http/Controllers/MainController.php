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
        return 'kovri page';
    }
    public function himchistka(){
        return 'himchistka page';
    }

    public function contact(){
        return 'contact page';
    }
}
