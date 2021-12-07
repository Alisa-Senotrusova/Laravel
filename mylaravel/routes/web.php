<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/form', function () {
    return view('form');
})->name('form');

Route::post('/form/submit', 'App\Http\Controllers\formController@submit')->name('problem-form');

Route::get('admin', 'App\Http\Controllers\formController@allData')->name('admin');

