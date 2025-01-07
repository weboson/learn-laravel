<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // метод для post (routes/web.php)
    public function register(Request $request) { // $request создали экземпляр класса Request

        //Validate
        $request->validate([
            'username' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required', 'min:3', 'confirmed'], // confirmed - должен быть подтвержден в поле password_confirmation
        ]);


        dd($request->username); // Что бы посмотреть, что содержит Request. Или даже определенное поле формы (username)
//Register
//Login
//Redirect
    }

}
