<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        return view('main-index',[
            'company' => Company::first()
        ]);
    }
}