<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/'], function (){
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/easy-way', [HomeController::class, 'easyWay'])->name('easy-way');
});
