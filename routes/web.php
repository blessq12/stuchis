<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

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
//Main domain group routes
Route::domain(env('APP_URL'))->group(function(){
    $mainRoutes = function(){
        Route::get('/','index')->name('index');
    };

    //Controllers route groups
    Route::controller(MainController::class)->name('main.')->group($mainRoutes);
});
