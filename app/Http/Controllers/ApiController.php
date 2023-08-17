<?php

namespace App\Http\Controllers;

use App\Models\CarpetsType;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function carpets(){
        $carpet = CarpetsType::find(9);
        $carpet_height = $carpet->getHeight();
        return response()->json($carpet_height);
    }
}
