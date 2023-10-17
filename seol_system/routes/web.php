<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/', [HomeController::class, 'home'])->name('home');

// Mostrar el formulario de inicio de sesión
Route::get('/login', [LoginController::class,'loginForm'])->name('login');
// Procesar el formulario de inicio de sesión
Route::post('/login', [LoginController::class,'store'])->name('login.store');
Route::get('/logout',[LogoutController::class,'store'])->name('logout');