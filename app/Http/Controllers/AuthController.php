<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login (){
           return view('auth.login');
        }
    public function autentiquate (Request $request){
        $email=htmlspecialchars($request->email);
        $password=htmlspecialchars($request->password);
        $estValide=true;

        if ($estValide){
           return redirect()->route('taches.index');
           }
        }
    public function register (){
            return view('auth.register');
        }
    public function storAction (Request $request){
        $name= htmlspecialchars($request->name);
        $email=htmlspecialchars($request->email);
        $password=htmlspecialchars($request->password);
        $estValide=true;
        if($password==0){

        };

    //   dd($request->name);
        if ($estValide){
        return redirect()->route('taches.index');
        }

        }


}
