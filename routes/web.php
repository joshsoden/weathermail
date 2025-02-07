<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('forecast.search');
})->name('forecast.search');
