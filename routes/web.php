<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ActionController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::domain('fskanapa.ru')->group(function(){
    Route::get('{any}',function(){
        return redirect('http://stuchis.ru/{any}', 301);
    })->where('any', '.*');
});
Route::get('/',[MainController::class,'index']);

