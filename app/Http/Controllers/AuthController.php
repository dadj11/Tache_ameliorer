<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login (){
           return view('login');
        }
    public function autentiquate (){
           return redirect()->route('taches.index');
        }
    public function register (){
            return view('login');
        }
    public function storAction (){
            return view('login');
        }


}
