<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return 'main page';
    }
    public function kovri(){
        return 'kovri page';
    }
    public function himchistka(){
        return 'himchistka page';
    }
}
