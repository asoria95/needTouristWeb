<?php

namespace App\Http\Controllers\Persons;
use App\Http\Controllers\Controller;
use App\Models\Persons\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $roles=Role::paginate(20); // Listar los roles y establecer una paginacion de 20 roles
      //return view('Persons.Persons.index',compact('persons'));
      return view('Role.role',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Role.create'); // Llamar al formulario
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,['nombre'=>'required']); // Validar los datos del formulario
      $data = ['nombre' => $request->input('nombre'),'descripcion' => $request->input('descripcion')];// Datos a ingresar en la tabla rol
      Role::create($data);
      Session::flash('message', 'Registro creado Correctamente');// retornar mensaje de registro correcto
      return redirect()->route('role.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persons\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return  view('Role.show',compact('role'));// Pasar el objeto para mostrar los datos del rol
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persons\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('Role.edit',compact('role'));// Pasar los datos del afiliado al formulario de edicion
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persons\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
      $this->validate($request,['nombre'=>'required']); // Validar los datos enviados por el formulario
      $data = ['nombre' => $request->input('nombre'),'descripcion' => $request->input('descripcion')]; // Datos a modificarse en la tabla rol
      $role->update($data);
      Session::flash('message', 'Modificación correcta');
      return redirect()->route('role.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persons\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //
    }

    public function delete(Role $role)
    {
      Role::destroy($role->id_rol); // Elminar el registro del rol
      Session::flash('message', 'Registro eliminado correctamente'); // Mensaje de exito
      return redirect()->route('role.index')->with('success','Eliminado satisfactoriamente');
    }
}
