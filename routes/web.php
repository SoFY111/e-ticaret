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

Route::get('/', function () {
    return view('front.index');
})->name('front.mainpage');

Route::get('/hakkimizda', function () {
    return view('front.about');
})->name('front.about');

Route::get('/iletisim', function () {
    return view('front.contact');
})->name('front.contact');

Route::get('/bilgisayar', function () {
    return view('front.bilgisayar');
})->name('front.bilgisayar');

Route::get('/ps', function () {
    return view('front.ps');
})->name('front.ps');

Route::get('/xbox', function () {
    return view('front.xbox');
})->name('front.xbox');

Route::get('/gta', function () {
    return view('front.gta');
})->name('front.gta');

Route::get('/ver', function () {
    return view('ver');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
