<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\EstudianteController;
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

Route::get('/dashboard', [HomeController::class, 'admin'])->name('HomeAdmin');

Route::get('/estudiante/dashboard', [EstudianteController::class, 'dashboard'])->name('estudiante.dashboard');
Route::get('/estudiante/solicitudes', [EstudianteController::class, 'solicitudes'])->name('estudiante.solicitudes');
Route::get('/estudiante/enproceso', [EstudianteController::class, 'enproceso'])->name('estudiante.enproceso');
Route::get('/estudiante/historial', [EstudianteController::class, 'historial'])->name('estudiante.historial');

Route::get('/Admin/dashboard', [AdminController::class, 'admin'])->name('Admin.dashboard');
Route::get('/Admin/AgregarAlumno', [AdminController::class, 'agregarAlumno'])->name('admin.alumnoagregar');
Route::post('/Admin/Alumnos/create', [AdminController::class,'storeAlumno'])->name('admin.alumno.store');
Route::get('/Admin/AgregarOficinista', [AdminController::class, 'agregarOficinista'])->name('admin.alumnoOficinista');
Route::post('/Admin/Oficinistas/create', [AdminController::class, 'storeOficinista'])->name('admin.oficinista.store');
Route::get('/Admin/GestionPlantilla', [AdminController::class, 'gestionPlantillaView'])->name('admin.gestionPlantilla');