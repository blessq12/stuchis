<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public $yandex_review = 'https://yandex.ru/maps/org/173501229461/reviews/?add-review=true';
    public function index(){

        return view('main-index',[
            'company' => Company::first(),
            'yandex_review' => $this->yandex_review
        ]);

    }
}