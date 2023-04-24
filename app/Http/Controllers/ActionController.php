<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\CalcMailer;


class ActionController extends Controller
{
    public function calc(Request $request){
        $requestData = $request->getContent();
        $requestData = json_decode($requestData);
        $requestData = json_decode(json_encode($requestData), true);

        Mail::to('code70@inbox.ru')->send(new CalcMailer($requestData));
    }
}
