<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function(){
    $user = User::first();
    return view('greeting', compact('user'));
});

Route::get('/books', [BukuController::class, 'index'])->name('books.index');
Route::get('/books/{id}', [BukuController::class, 'show'])->name('books.show');