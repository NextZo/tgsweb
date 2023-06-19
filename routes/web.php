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

Route::prefix('/kategori')->group(function () {
    Route::get('/', function () {
        return view('category');
    });

    Route::get('/kaos', function () {
        return view('categories/kaospolos');
    });

    Route::get('/kemeja', function () {
        return view('categories/kemeja');
    });

    Route::get('/hoodie', function () {
        return view('categories/hoodie');
    });

    Route::get('/jas', function () {
        return view('categories/jas');
    });

    Route::get('/sweater', function () {
        return view('categories/sweater');
    });
});

Route::get('/kontak', function () {
    return view('contact');
});

Route::get('/tentang', function () {
    return view('about');
});

// authentication
Route::get('/masuk', function () {
    return view('login');
});

Route::get('/daftar', function () {
    return view();
});

// admin
Route::prefix('/dashboard')->group(function () {
    Route::get('/', function () {
        return view('admin/index');
    });
});
