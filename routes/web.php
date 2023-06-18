<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/kaospolos', function () {
    return view('kaospolos');
});

Route::get('/kemeja', function () {
    return view('kemeja');
});

Route::get('/hoodie', function () {
    return view('hoodie');
});

Route::get('/jas', function () {
    return view('jas');
});

Route::get('/sweater', function () {
    return view('sweater');
});

Route::get('/login', function () {
    return view('login');
});
