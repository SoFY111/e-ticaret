<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::prefix('/')->name('front.')->group(function(){
    Route::get('/', function () {
        return view('front.index');
    })->name('mainpage');

    Route::get('/hakkimizda', function () {
        return view('front.about');
    })->name('about');

    Route::get('/iletisim', function () {
        return view('front.contact');
    })->name('contact');

    Route::get('/bilgisayar', function () {
        return view('front.bilgisayar');
    })->name('bilgisayar');

    Route::get('/ps', function () {
        return view('front.ps');
    })->name('ps');

    Route::get('/xbox', function () {
        return view('front.xbox');
    })->name('xbox');

    Route::get('/gta', function () {
        return view('front.gta');
    })->name('gta');

    Route::get('/ver', function () {
        return view('ver');
    });
});

Route::prefix('/admin')->name('back.')->middleware(['isLogin', 'isAdmin'])->group(function() {
    Route::get('/', function (){
        return view('back.dashboard');
    })->name('dashboard');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
