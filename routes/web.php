<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/'], function (){
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/easy-way', [HomeController::class, 'easyWay'])->name('easy-way');
});

Route::group(['prefix' => '/answer'], function (){
    Route::get('/', [AnswerController::class, 'show'])->name('answer-show');
    Route::get('/add', [AnswerController::class, 'add'])->name('answer-add');
});

Route::group(['prefix' => '/question'], function (){
    Route::get('/', [QuestionController::class, 'show'])->name('question-show');
});
