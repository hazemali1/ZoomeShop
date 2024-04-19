<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/men', function () {
    return view('men');
});
Route::get('/woman', function () {
    return view('woman');
});
Route::get('/computers', function () {
    return view('computers');
});
Route::get('/mobiles', function () {
    return view('mobiles');
});
Route::get('/contact', function () {
    return view('contact');
});