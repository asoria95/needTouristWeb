<?php

namespace App\Http\Controllers\Persons;

use App\Models\Persons\Afilliate;
use App\Http\Controllers\Controller;
use App\Models\Persons\Persons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class AfilliateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $afilliates=Afilliate::paginate(20); // Listar los afiliados y establecer una paginacion de 20 afiliados
      //return view('Persons.Persons.index',compact('persons'));
      return view('Afilliate.afilliate',compact('afilliates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Afilliate.create'); // Llamar al formulario
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $this->validate($request,['nombre'=>'required',
                                'email'=>'required',
                                'direccion' =>  'required',
                                'edad' => 'required',
                                'curriculum' => 'required']); // Validar los datos del formulario
      $file = $request->curriculum; // obtener el archivo ingresado
      $data = ['nombre' => $request->input('nombre'), 'email' => $request->input('email')];// Datos a ingresar en la tabla personas
      $person = Persons::create($data); // Ingresar los datos en la tabla personas y obtener sus valores
      $path =   $request->curriculum->store('curriculum');// Almacenar el archivo en el servidor y obtener su ruta donde se almaceno
      $data = [ 'id_afiliado' =>  $person->id_persona,
                'direccion' =>  $request->input('direccion'),
                'edad' => $request->input('edad'),
                'curriculum' => $path]; // Se crean los valores para insertar en la tabla afiliados almacenando la ruta del archivo
      Afilliate::create($data); // Ingresar los datos en la tabla afiliado
      Session::flash('message', 'Registro creado Correctamente');// retornar mensaje de registro correcto
      return redirect()->route('afilliate.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Afilliate  $afilliate
     * @return \Illuminate\Http\Response
     */
    public function show(Afilliate $afilliate)
    {
      //$afilliate=Afilliate::find($afilliate->id_afiliado);
      return  view('Afilliate.show',compact('afilliate'));// Pasar el objeto para mostrar los datos del afiliado para buscar
    }

    public function curriculum(Afilliate $afilliate)
    {
      return  view('Afilliate.editCurriculum',compact('afilliate'));// Pasar el objeto para mostrar los datos del afiliado para buscar
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Afilliate  $afilliate
     * @return \Illuminate\Http\Response
     */
    public function edit(Afilliate $afilliate)
    {
      //$afilliate=Afilliate::find($afilliate->id_afiliado); //
      return view('Afilliate.edit',compact('afilliate'));// Pasar los datos del afiliado al formulario de edicion
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Afilliate  $afilliate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Afilliate $afilliate)
    {
      //dd($request->input('nombre'));

      $this->validate($request,['nombre'=>'required',
                                'email'=>'required',
                                'direccion' =>  'required',
                                'edad' => 'required']); // Validar los datos enviados por el formulario
      $data = ['nombre' => $request->input('nombre'), 'email' => $request->input('email')]; // Datos a almacenarce en la tabla personas
      $afilliate->person->update($data); // Editar los datos de la tabla persona
      $data = [ 'direccion' =>  $request->input('direccion'),
                'edad' => $request->input('edad')]; // Datos de la tabla afiliados
      $afilliate->update($data); // Editar los datos de la tabla afiliados
      Session::flash('message', 'Modificación correcta');
      return redirect()->route('afilliate.index')->with('success','Registro creado satisfactoriamente');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Afilliate  $afilliate
     * @return \Illuminate\Http\Response
     */
    public function updateFile(Request $request, Afilliate $afilliate)
    {
      $this->validate($request,['curriculum' => 'required']); // validar que envie un archivo
      $file = $request->curriculum; // Se toma el archivo
      if(self::existCurriculum($afilliate)){ // Si existe ya un archivo ingresado se elimina el anterior
        self::deleteCurriculum($afilliate); // Eliminar archivo
      }
        $path =   $request->curriculum->store('curriculum');// Guardar el archivo y obtener la ruta donde se almaceno
        $afilliate->update(['curriculum' => $path]); // Modificar la ruta en la base de datos
      Session::flash('message', 'El archivo se modifico correctamente');// Mensaje de confirmacion de modificacion
      return redirect()->route('afilliate.index')->with('success','El archivo se modifico correctamente');
    }

    public function downloadCurriculum(Afilliate $afilliate)
    {
      //dd($size = Storage::disk('local')->extension($afilliate->curriculum));

      if(self::existCurriculum($afilliate)){ // Verificar si es que existe el archivo a descargar
        $file = Storage::disk('local')->get($afilliate->curriculum); // Obtener el archvio
        return Storage::disk('local')->download($afilliate->curriculum); // Ordenar la descarga al navegador
      }
      return "No existe el archivo";

    }

    public function existCurriculum(Afilliate $afilliate)
    {
      return (Storage::disk('local')->exists($afilliate->curriculum));//Preguntar si existe un curriculum de ese objeto afiliado
    }

    public function deleteCurriculum(Afilliate $afilliate){
      Storage::disk('local')->delete($afilliate->curriculum);//Eliminar el archivo
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Afilliate  $afilliate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Afilliate $afilliate)
    {
        //
    }

    public function delete(Afilliate $afilliate)
    {
      Persons::destroy($afilliate->id_afiliado); // Elminar el registro de la persona, pero como esta activada la
      //elminacion en cascada en la relacion se elimina de todas las tablas
      Session::flash('message', 'Registro eliminado correctamente'); // Mensaje de exito
      return redirect()->route('afilliate.index')->with('success','Modificado satisfactoriamente');
    }
}
