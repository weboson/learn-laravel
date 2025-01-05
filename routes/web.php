<?php

use Illuminate\Support\Facades\Route;

// способ №1
Route::get('/', function () {
    return view('posts.index'); // view() автоматически смотрит resources/view/[указываем пут]ь
})->name('home'); // пример ссылки в меню: <a href="{{ route('home') }}">Home</a>

// способ №2
//Route::view('/', 'posts.index')->name('home');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
