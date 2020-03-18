<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Home@index')->name('home.index');
Route::post('/sendEmail', 'Home@sendEmail')->name('home.sendEmail');
Route::post('/subscribe', 'Home@subscribe')->name('home.subscribe');
