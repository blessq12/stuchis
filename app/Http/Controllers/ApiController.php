<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function carpets(){
        $carpets = Type::all();
        $response = [];
        foreach ($carpets as $carpet) {
            $carpet->getHeights;
            $response[] = $carpet;
        }
        return response()->json($response);
    }
}
