<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        return view('login');
    }

//    public function auth(LoginRequest $loginRequest){
//        $credentials = $loginRequest->validated();
//
//        if (Auth::attempt($credentials)){
//            $loginRequest->session()->regenerate();
//
//            return redirect('/shorten/');
//
//        }else{
//            return back()->withErrors([
//                'email' => 'Credenciais inválidas'
//            ]);
//        }
//    }
}
