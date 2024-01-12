<?php

use Illuminate\Support\Facades\Route;



Route::view('/', 'pages/welcome')->name('home');

Route::view('/about-us', 'pages/about')->name('about');
