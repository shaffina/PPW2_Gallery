<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\GalleryController;


Route::controller(LoginRegisterController::class)->group(function() {
 Route::get('/register', 'register')->name('register');
 Route::post('/store', 'store')->name('store');
 Route::get('/login', 'login')->name('login');
 Route::post('/authenticate', 'authenticate')->name('authenticate');
 Route::get('/dashboard', 'dashboard')->name('dashboard');
 Route::post('/logout', 'logout')->name('logout');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-mail', [SendEmailController::class,'index'])->name('kirim-email');

Route::post('/post-email', [SendEmailController::class, 'store'])->name('post-email');

Route::get('/users', [UserController::class, 'index'])->name('users');

// Menampilkan formulir edit
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('editUser');

// Menyimpan perubahan edit pengguna
Route::put('/user/update/{id}', [UserController::class, 'update'])->name('updateUser');

// Menghapus pengguna
Route::delete('/user/delete/{id}', [UserController::class, 'delete'])->name('deleteUser');

Route::resource('gallery', GalleryController::class);