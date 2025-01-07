<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;

// способ №1
//Route::get('/', function () {
//    return view('posts.index'); // view() автоматически смотрит resources/view/[указываем пут]ь
//})->name('home'); // пример ссылки в меню: <a href="{{ route('home') }}">Home</a>

// способ №2: если функция ничего не возвращает, а просто отправляет на view()
Route::view('/', 'posts.index')->name('home');

Route::view('/register', 'auth.register')->name('register');
// метод register из AuthController - будет обрабатывать post запрос
Route::post('/register', [AuthController::class, 'register']);
