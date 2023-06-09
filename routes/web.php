<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['splade'])->group(function () {
    Route::get('/', fn() => view('home'))->name('home');
    Route::get('/docs', fn() => view('docs'))->name('docs');
    Route::get('/login', fn() => view('auth.login'))->name('login');
    Route::get('/register', fn() => view('auth.register'))->name('register');
    Route::get('/forgot-password', fn() => view('auth.forgot-password'))->name(
        'forgot-password'
    );
    Route::get('/reset-password', fn() => view('auth.reset-password'))->name(
        'reset-password'
    );
    Route::get('/home', fn() => view('home.home'))->name('home');

    Route::get('users', fn() => view('home.users'))->name('users');

    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();
});
