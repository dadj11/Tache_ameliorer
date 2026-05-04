<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\TacheController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function(){
  return to_route('taches.index');
});

// Utilisation de la syntaxe en tableau [Classe, 'méthode']
Route::get('/login',
[AuthController::class, 'login']
)->name('login');
Route::get('/register',
 [AuthController::class, 'register']
 )->name('register');
 Route::post('/register',
 [AuthController::class, 'storAction']
 )->name('storAction');
Route::post('/login',
[AuthController::class ,'autentiquate']
)->name('autentiquate');

Route::resource('taches', TacheController::class);
Route::resource('notes', NoteController::class);
