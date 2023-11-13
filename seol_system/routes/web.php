<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get('/Admin/dashboard', [AdminController::class, 'admin'])->name('Admin.dashboard');

Route::get('/Admin/AgregarAlumno', [AdminController::class, 'agregarAlumno'])->name('admin.alumnoagregar');

Route::get('/Admin/AgregarOficinista', [AdminController::class, 'agregarOficinista'])->name('admin.alumnoOficinista');

Route::get('/Admin/GestionPlantilla', [AdminController::class, 'gestionPlantillaView'])->name('admin.gestionPlantilla');