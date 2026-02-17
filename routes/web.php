<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/why', function () {
    return view('why');
});
Route::get('/background', function () {
    return view('background');
});
Route::get('/Creative', function () {
    return view('creative');
});
Route::get('/contact', function () {
    return view('contact');
});
