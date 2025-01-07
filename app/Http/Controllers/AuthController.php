<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // метод для post (routes/web.php)
    public function register(Request $request) { // $request создали экземпляр класса Request
        dd($request->username); // Чтобы посмотреть, что содержит Request. Или даже определенное поле формы (username)
    }

}
