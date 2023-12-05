
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Constructor to validate authenticated user.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    

    //regresar la vista para mostrar todos los proveedores
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('pages/proveedores/proveedor', ['proveedores' => $proveedores]);
    }

    //regresar la vista para crear un nuevo proveedor
    public function create()
    {
        return view('pages/proveedores/add-proveedor');
    }

    //regresar la vista para agreegar un proveedor
    
    //funcion para agregar un nuevo proveedor
    public function store(Request $request)
    {
        //validar los datos
        $this->validate($request, [
            'nombre_empresa' => 'required | unique:proveedores',
            'contacto_principal' => 'required',
            'direccion' => 'required',
            'telefono' => 'required | numeric | digits:10 | unique:proveedores',
            'email' => 'required | email | unique:proveedores',
            'sitio_web' => 'required | unique:proveedores',
            'rfc' => 'required | max:13 | min:12 | unique:proveedores',
            
        ]);

        //guardar los datos
        Proveedor::create([
            'nombre_empresa' => $request->nombre_empresa,
            'contacto_principal' => $request->contacto_principal,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'sitio_web' => $request->sitio_web,
            'rfc' => $request->rfc,
        ]);

        //redireccionar a la vista de productos
        return redirect()->route('proveedor.index')->with('success', 'Proveedor agregado correctamente');
    }
    
    //regresar la vista para editar un proveedor
    //obtener el id del proveedor que se quiere editar
    public function edit($id_proveedor)
    {
        //buscar el proveedor con el id que se recibe
        $proveedor = Proveedor::find($id_proveedor);
        return view('pages/proveedores/edit-proveedor', ['proveedor' => $proveedor]);
    }

    //funcion para actualizar un proveedor
    public function update(Request $request, $id_proveedor)
    {
    // Obtener el proveedor existente
    $proveedor = Proveedor::find($id_proveedor);

    // Validar los datos, ignorando la regla 'unique' si los datos no han cambiado
    $this->validate($request, [
        'nombre_empresa' => 'required|unique:proveedores,nombre_empresa,'.$proveedor->id,
        'contacto_principal' => 'required',
        'direccion' => 'required',
        'telefono' => 'required|numeric|digits:10|unique:proveedores,telefono,'.$proveedor->id,
        'email' => 'required|email|unique:proveedores,email,'.$proveedor->id,
        'sitio_web' => 'required|unique:proveedores,sitio_web,'.$proveedor->id,
        'rfc' => 'required| max:13|min:12|unique:proveedores,rfc,'.$proveedor->id.'',
    ]);

    // Actualizar los datos
    $proveedor->update([
        'nombre_empresa' => $request->nombre_empresa,
        'contacto_principal' => $request->contacto_principal,
        'direccion' => $request->direccion,
        'telefono' => $request->telefono,
        'email' => $request->email,
        'sitio_web' => $request->sitio_web,
        'rfc' => $request->rfc,
    ]);

        //redireccionar a la vista de productos
        return redirect()->route('proveedor.index')->with('success', 'Proveedor actualizado correctamente');
    }


    //eliminar un proveedor
    public function delete($id_proveedor)
    {
        //eliminar el proveedor con el id que se recibe
        Proveedor::find($id_proveedor)->delete();
        return redirect()->route('proveedor.index')->with('success', 'Proveedor eliminado correctamente');
    }




    



}
