<?php

use Illuminate\Support\Facades\Route;

//FRONTEND CONTROLLERs
use App\Http\Controllers\Front\MainController;

//BACKEND CONTROLLERs
use \App\Http\Controllers\Back\SuperAdminController;
use App\Http\Controllers\Back\PublisherController;
use App\Http\Controllers\Back\SliderController;
use App\Http\Controllers\Back\ProductController;
use App\Http\Controllers\Back\KindController;

Auth::routes();

Route::prefix('/')->name('front.')->group(function(){
    Route::get('/', [MainController::class, 'index'])->name('mainpage');

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

    Route::get('/slider', [SliderController::class, 'index'])->name('slider.index');
    Route::get('/slider/ekle', [SliderController::class, 'storeSliderIndex'])->name('slider.store.index');
    Route::post('/slider/ekle', [SliderController::class, 'storeSlider'])->name('slider.store');
    Route::post('/slider/duzenle', [SliderController::class, 'updateSlider'])->name('slider.update');
    Route::get('/slider/duzenle/{id}', [SliderController::class, 'updateSliderIndex'])->name('slider.update.index');
    Route::delete('/slider', [SliderController::class, 'deleteSlider'])->name('slider.delete');

    Route::get('/tur', [KindController::class, 'index'])->name('kind.index');
    Route::post('/tur', [KindController::class, 'storeKind'])->name('kind.store');
    Route::delete('/tur', [KindController::class, 'deleteKind'])->name('kind.delete');

    Route::get('/urunler', [ProductController::class, 'index'])->name('products.index');
    Route::get('/urun/ekle', [ProductController::class, 'storeProductIndex'])->name('products.store.index');
    Route::post('/urun/ekle', [ProductController::class, 'storeProduct'])->name('products.store');

    //superAdminAuthority
    Route::prefix('/')->name('superAdmin.')->middleware('isSuperAdmin')->group(function(){
        Route::get('/kullanici-yetki-degistir', [SuperAdminController::class, 'changeUserAuthorityIndex'])->name('changeUserAuthority');
        Route::post('/kullanici-yetki-degistir', [SuperAdminController::class, 'changeUserAuthority'])->name('changeUserAuthorityPost');
    });
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
