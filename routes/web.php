<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
    return view('admin.auth.register');
})->name('admin#register');

Route::get('/admin/login', function() {
    return view('admin.auth.login');
})->name('admin#login');


Route::get('/admin/logout', function() {
    Session::flush();
    Auth::logout();
    return redirect()->route('admin#login');
})->name('admin#logout');

//user must login or register
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.layout.master');
    })->name('dashboard');
});


