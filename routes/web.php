<?php

use App\Http\Controllers\ControllerHandler;
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

Route::get('/tentang', function () {
    return view('about');
});

// authentication
Route::get('/masuk', [ControllerHandler::class, 'getLogin'])->name('login');
Route::post('/masuk', [ControllerHandler::class, 'postLogin']);

Route::get('/daftar', [ControllerHandler::class, 'getRegister']);
Route::post('/daftar', [ControllerHandler::class, 'postRegister']);

Route::get('/logout', [ControllerHandler::class, 'logout']);

Route::middleware('auth')->group(function () {
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

    Route::get('/ulasan', function () {
        return view('review');
    });

    // admin
    Route::prefix('/dashboard')->group(function () {
        Route::get('/', function () {
            return view('admin/index');
        });
    });
});
