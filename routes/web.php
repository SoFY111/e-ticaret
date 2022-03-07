<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\Back\SuperAdminController;
use App\Http\Controllers\Back\PublisherController;
use App\Http\Controllers\Back\SliderController;

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

    Route::get('/yayinci', [PublisherController::class, 'index'])->name('publisher');
    Route::post('/yayinci', [PublisherController::class, 'storePublisher'])->name('publisher.store');
    Route::delete('/yayinci', [PublisherController::class, 'deletePublisher'])->name('publisher.delete');

    Route::get('/slider', [SliderController::class, 'index'])->name('slider');
    Route::post('/slider', [SliderController::class, 'storeSlider'])->name('slider.store');
    Route::put('/slider/{id}', [SliderController::class, 'updateSlider'])->name('slider.update');
    Route::delete('/slider', [SliderController::class, 'deleteSlider'])->name('slider.delete');

    //superAdminAuthority
    Route::prefix('/')->name('superAdmin.')->middleware('isSuperAdmin')->group(function(){
        Route::get('/kullanici-yetki-degistir', [SuperAdminController::class, 'changeUserAuthorityIndex'])->name('changeUserAuthority');
        Route::post('/kullanici-yetki-degistir', [SuperAdminController::class, 'changeUserAuthority'])->name('changeUserAuthorityPost');
    });
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
