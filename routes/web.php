<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\ShopController;

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
        Route::get('/kovri','kovri')->name('kovri');
        Route::get('/mebel','mebel')->name('mebel');
        Route::get('/calculator','calculator')->name('calculator');
        Route::get('/contact','contact')->name('contact');
    };
    $shopRoutes = function(){
        Route::get('/','index')->name('indnex');
    };

    //Controllers route groups
    Route::controller(MainController::class)->name('main.')->group($mainRoutes);
    Route::controller(ShopController::class)->prefix('shop')->name('shop.')->group($shopRoutes);
});
