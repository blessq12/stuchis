<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function carpets(){
        $carpet = Type::find(8);
        return response()->json($carpet);
    }
}
