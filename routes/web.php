<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});
Route::resource('admin/books', BookController::class);
Route::resource('admin/authors', AuthorController::class);

Route::get('/authors', [HomeController::class, 'authors']);
Route::get('/authors/{nickname}', [HomeController::class, 'books']);
