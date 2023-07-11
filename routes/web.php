<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ControllerHandler;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/troli', [ControllerHandler::class, 'troli']);
Route::post('/troli', [ControllerHandler::class, 'postTroli']);
Route::get('/thankyou', [ControllerHandler::class, 'thanks']);

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

        Route::get('/kaos', [UserController::class, 'kaos']);
        Route::get('/kemeja', [UserController::class, 'kemeja']);
        Route::get('/hoodie', [UserController::class, 'hoodie']);
        Route::get('/jas', [UserController::class, 'jas']);
        Route::get('/sweater', [UserController::class, 'sweater']);
    });

    Route::get('/ulasan', function () {
        return view('review');
    });

    // admin

    Route::prefix('/dashboard')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->can('isAdmin', Auth::user());

        // users
        Route::get('/users', [AdminController::class, 'users'])->can('isAdmin', Auth::user());
        Route::get('/users/{user:username}', [AdminController::class, 'user'])->can('isAdmin', Auth::user());
        Route::post('/users/{user:username}', [AdminController::class, 'postUser'])->can('isAdmin', Auth::user());
        Route::get('/users/delete/{user:username}', [AdminController::class, 'deleteUser'])->can('isAdmin', Auth::user());

        // clothes
        Route::get('/clothes', [AdminController::class, 'clothes'])->can('isAdmin', Auth::user());
        Route::get('/clothes/{product:id}', [AdminController::class, 'getClothes'])->can('isAdmin', Auth::user());
        Route::post('/clothes/{product:id}', [AdminController::class, 'updateClothes'])->can('isAdmin', Auth::user());
        Route::get('/clothes/delete/{product:id}', [AdminController::class, 'deleteClothes'])->can('isAdmin', Auth::user());
    });
});
