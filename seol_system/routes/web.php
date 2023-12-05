

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController; 
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\SubcategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProductoscompraController;
use App\Http\Controllers\ArchivosController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\posController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', 'login');

Route::get('/pos', function () {
    return view('pos');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::fallback(function() {
        return view('pages/utility/404');
    });    


     //Ruta para ir a la vista de categorias
     Route::get('/categorias', [CategoriaController::class, 'index'])->name('categoria.index');
     //Ruta para ir a la vista de crear categorias
     Route::get('/categorias/agregar/', [CategoriaController::class, 'create'])->name('categoria.create');
     //Ruta para crear una categoria en la base de datos
     Route::post('/categorias/agregar/', [CategoriaController::class, 'store']);
    //Ruta para editar a una categoria
    Route::get('/categorias/editar/{id_categorias}', [CategoriaController::class, 'edit'])->name('categoria.editar');
    //Ruta para actualizar a una categoria
    Route::post('/categorias/editar/{id_categorias}', [CategoriaController::class, 'update'])->name('categoria.actualizar');
     //Ruta para eliminar a una categoria
     Route::get('/categorias/eliminar/{id_categorias}', [CategoriaController::class, 'delete'])->name('categoria.eliminar');

 
     //Ruta para ir a la vista de subcategorias
     Route::get('/subcategorias', [SubcategoriaController::class, 'index'])->name('subcategoria.index');
     //Ruta para ir a la vista de crear subcategorias
     Route::get('/subcategorias/agregar/', [SubcategoriaController::class, 'create'])->name('subcategoria.create');
     //Ruta para agregar la subcategoria
     Route::post('/subcategorias/agregar/', [SubcategoriaController::class, 'store']);
    //Ruta para editar a una subcategoria
    Route::get('/subcategorias/editar/{id_subcategoria}', [SubcategoriaController::class, 'edit'])->name('subcategoria.editar');
    //Ruta para actualizar a una subcategoria
    Route::post('/subcategorias/editar/{id_subcategoria}', [SubcategoriaController::class, 'update'])->name('subcategoria.actualizar');
     //Ruta para eliminar a una subcategoria
     Route::get('/subcategorias/eliminar/{id_subcategoria}', [SubcategoriaController::class, 'delete'])->name('subcategoria.eliminar');


    //Ruta para ir a la vista de marcas
    Route::get('/marcas', [MarcaController::class, 'index'])->name('marca.index');
    //Ruta para ir a la vista de crear marcas
    Route::get('/marcas/agregar/', [MarcaController::class, 'create'])->name('marca.create');
    //Ruta para crear una categoria en la base de datos
    Route::post('/marcas/agregar/', [MarcaController::class, 'store']);
    //Ruta para editar a una categoria
    Route::get('/marcas/editar/{id_marca}', [MarcaController::class, 'edit'])->name('marca.editar');
    //Ruta para actualizar a una categoria
    Route::post('/marcas/editar/{id_marca}', [MarcaController::class, 'update'])->name('marca.actualizar');
    //Ruta para eliminar a una categoria
    Route::get('/marcas/eliminar/{id_marca}', [MarcaController::class, 'delete'])->name('marca.eliminar');



 
     //Ruta para ver la vista de productos
     Route::get('/productos', [ProductoController::class, 'index'])->name('producto.index');
     //Ruta para ver la vista de agregar productos
     Route::get('/productos/agregar/', [ProductoController::class, 'create'])->name('producto.create');
     //Ruta para insertar los datos en la tabla de productos
     Route::post('/productos/agregar/', [ProductoController::class, 'store'])->name('producto.store');
    //Ruta para editar la producto
    Route::get('/productos/editar/{id_producto}',[ProductoController::class, 'edit'])->name('producto.editar');
    //Ruta para actualizar la producto
    Route::post('/productos/editar/{id_producto}',[ProductoController::class, 'update'])->name('producto.actualizar');
     //Ruta para eliminar la producto
     Route::get('/productos/eliminar/{id_producto}',[ProductoController::class, 'delete'])->name('producto.eliminar');


    //Ruta para ver la vista de proveedores
    Route::get('/proveedores', [ProveedorController::class, 'index'])->name('proveedor.index');
    //Ruta para ver la vista de agregar proveedores
    Route::get('/proveedores/agregar/', [ProveedorController::class, 'create'])->name('proveedor.create');
    //Ruta para insertar los datos en la tabla de proveedores
    Route::post('/proveedores/agregar/', [ProveedorController::class, 'store'])->name('proveedor.store');
    //Ruta para eliminar proveedor
    Route::get('/proveedores/eliminar/{id_proveedor}',[ProveedorController::class, 'delete'])->name('proveedor.eliminar');
    //Ruta para editar proveedor
    Route::get('/proveedores/editar/{id_proveedor}',[ProveedorController::class, 'edit'])->name('proveedor.editar');
    //Ruta para actualizar proveedor
    Route::post('/proveedores/editar/{id_proveedor}',[ProveedorController::class, 'update'])->name('proveedor.actualizar');


     //Ruta para ver la vista de clientes
     Route::get('/clientes', [ClienteController::class, 'index'])->name('cliente.index');
     //Ruta para ver la vista de agregar cliente
     Route::get('/clientes/agregar/', [ClienteController::class, 'create'])->name('cliente.create');
     //Ruta para insertar los datos en la tabla de clientes
     Route::post('/clientes/agregar/', [ClienteController::class, 'store'])->name('cliente.store');
     //Ruta para eliminar cliente
     Route::get('/clientes/eliminar/{id_cliente}',[ClienteController::class, 'delete'])->name('cliente.eliminar');
    //Ruta para editar cliente
    Route::get('/clientes/editar/{id_cliente}',[ClienteController::class, 'edit'])->name('cliente.editar');
    //Ruta para actualizar cliente
    Route::post('/clientes/editar/{id_cliente}',[ClienteController::class, 'update'])->name('cliente.actualizar');
    
    //Ruta para ver la vista de compras
    Route::get('/compras', [CompraController::class, 'index'])->name('compra.index');
    //Ruta para ver la vista de agregar compra
    Route::get('/compras/agregar/', [CompraController::class, 'create'])->name('compra.create');
    //Ruta para agregar compra
    Route::post('/compras/agregar/compra', [CompraController::class, 'store'])->name('compra.store');

    Route::get('/pos', [posController::class, 'index'])->name('pos.index');

     
     //Ruta para la carga de imagenes
     Route::post('/png',[ArchivosController::class,'storePNG'])->name('archivos.png');
     //Ruta para descargar los archivos de la tabla
     Route::get('/download/{file}',[ArchivosController::class,'download'])->name('archivos.download');

});