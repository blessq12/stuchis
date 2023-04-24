<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function calc(Request $request){
        echo $request->all();
    }
}
