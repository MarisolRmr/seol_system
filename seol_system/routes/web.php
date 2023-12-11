<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\OficinistaController;
use App\Http\Controllers\FilesController;
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
Route::post('/estudiante/solicitudes', [EstudianteController::class, 'store']);
Route::get('/estudiante/enproceso', [EstudianteController::class, 'enproceso'])->name('estudiante.enproceso');
Route::get('/estudiante/historial', [EstudianteController::class, 'historial'])->name('estudiante.historial');
Route::get('/estudiante/Perfil', [EstudianteController::class, 'Perfil'])->name('estudiante.perfil');
Route::post('/estudiante/Descargar/{id}', [EstudianteController::class, 'descargarDocumento'])->name('estudiante.descargar');

Route::get('/Admin/dashboard', [AdminController::class, 'admin'])->name('Admin.dashboard');
Route::get('/Admin/AgregarAlumno', [AdminController::class, 'agregarAlumno'])->name('admin.alumnoagregar');
Route::get('/Admin/Alumnos', [AdminController::class, 'Alumnos'])->name('admin.alumnos');
Route::post('/Admin/Alumnos/create', [AdminController::class,'storeAlumno'])->name('admin.alumno.store');
Route::get('/Admin/Oficinistas', [AdminController::class, 'Oficinistas'])->name('admin.oficinista');
Route::get('/Admin/AgregarOficinista', [AdminController::class, 'agregarOficinista'])->name('admin.alumnoOficinista');
Route::post('/Admin/Oficinistas/create', [AdminController::class, 'storeOficinista'])->name('admin.oficinista.store');
Route::get('/Admin/Plantillas', [AdminController::class,'Documentos'])->name('Admin.plantilla');
Route::get('/Admin/GestionPlantilla', [AdminController::class, 'gestionPlantillaView'])->name('admin.gestionPlantilla');
Route::post('/Admin/GestionarPlantilla', [AdminController::class,'storePlantilla'])->name('admin.plantilla.store');



//Oficinista
Route::get('/Oficinista/dashboard', [OficinistaController::class, 'dashboard'])->name('oficinista.dashboard');
Route::get('/Oficinista/solicitudes', [OficinistaController::class, 'solicitudesVista'])->name('oficinista.solicitudesVista');
Route::get('/Oficinista/Proceso', [OficinistaController::class, 'ProcesoVista'])->name('oficinista.enprocesoVista');
Route::get('/Oficinista/HistorialDocumentos', [OficinistaController::class, 'HistorialVista'])->name('oficinista.HistorialVista');
Route::get('/Oficinista/Perfil', [OficinistaController::class, 'Perfil'])->name('oficinista.perfil');
Route::get('/Oficinista/EditarDocumento/{id}', [OficinistaController::class, 'editarDocumentoView'])->name('oficinista.editarDocumento');
Route::post('/Oficinista/modificacion/{id}', [OficinistaController::class,'modificarDocumento'])->name('ruta.modificar');
Route::get('/Oficinista/Plantillas', [OficinistaController::class,'Documento'])->name('oficinista.plantilla');
Route::post('/Oficinista/aceptarSolicitud/{id}/{nombre}/{documento}', [OficinistaController::class,'aceptarSolicitud'])->name('oficinista.aceptar');
