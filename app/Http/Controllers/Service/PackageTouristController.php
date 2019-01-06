<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Service\PackageTourist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
class PackageTouristController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $packageTourists=PackageTourist::paginate(20);
      //return view('Persons.Persons.index',compact('persons'));
      return view('Package.package',compact('packageTourists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,['descripcion'=>'required',
                                'itinerario'=>'required',
                                'price' =>  'required']); // Validar los datos del formulario

      $path =   $request->itinerario->store('paquetesTuristicos');// Almacenar el archivo en el servidor y obtener su ruta donde se almaceno
      $data = ['descripcion' => $request->input('descripcion'),
               'itinerario' => $path,
               'price' => $request->input('price')];// Datos a ingresar en la tabla Paquete turístico

      PackageTourist::create($data); // Ingresar los datos en la tabla afiliado
      Session::flash('message', 'Registro creado Correctamente');// retornar mensaje de registro correcto
      return redirect()->route('packageTourist.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service\PackageTourist  $packageTourist
     * @return \Illuminate\Http\Response
     */
    public function show(PackageTourist $packageTourist)
    {
        return  view('Package.show',compact('packageTourist'));// Pasar el objeto para mostrar los datos del paquete turístico para buscar
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service\PackageTourist  $packageTourist
     * @return \Illuminate\Http\Response
     */
    public function edit(PackageTourist $packageTourist)
    {
        return view('Package.edit',compact('packageTourist'));// Pasar los datos del afiliado al formulario de edicion
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service\PackageTourist  $packageTourist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PackageTourist $packageTourist)
    {
      $this->validate($request,['descripcion'=>'required',
                                'precio'=>'required']); // Validar los datos enviados por el formulario
      $data = ['descripcion' => $request->input('descripcion'), 'price' => $request->input('precio')]; // Datos a almacenarce en la tabla paquetesTuristicos
      $packageTourist->update($data); // Editar los datos de la tabla afiliados
      Session::flash('message', 'Modificación correcta');
      return redirect()->route('packageTourist.index')->with('success','Registro creado satisfactoriamente');
    }

    public function updateFile(Request $request, PackageTourist $packageTourist)
    {
      $this->validate($request,['itinerario' => 'required']); // validar que envie un archivo
      $file = $request->itinerario; // Se toma el archivo
      if(self::existItinerary($packageTourist)){ // Si existe ya un archivo ingresado se elimina el anterior
        self::deleteItinerary($packageTourist); // Eliminar archivo
      }
        $path =   $request->itinerario->store('paquetesTuristicos');// Guardar el archivo y obtener la ruta donde se almaceno
        $packageTourist->update(['itinerario' => $path]); // Modificar la ruta en la base de datos
      Session::flash('message', 'El archivo se modifico correctamente');// Mensaje de confirmacion de modificacion
      return redirect()->route('packageTourist.index')->with('success','El archivo se modifico correctamente');
    }

    public function deleteItinerary(PackageTourist $packageTourist){
      Storage::disk('local')->delete($packageTourist->itinerario);//Eliminar el archivo
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service\PackageTourist  $packageTourist
     * @return \Illuminate\Http\Response
     */
    public function destroy(PackageTourist $packageTourist)
    {
        //
    }

    public function delete(PackageTourist $packageTourist)
    {
      PackageTourist::destroy($packageTourist->id_paquete); // Elminar el registro de la persona, pero como esta activada la
      //elminacion en cascada en la relacion se elimina de todas las tablas
      Session::flash('message', 'Registro eliminado correctamente'); // Mensaje de exito
      return redirect()->route('packageTourist.index')->with('success','Modificado satisfactoriamente');
    }

    public function downloadItinerary(PackageTourist $packageTourist)
    {


      if(self::existItinerary($packageTourist)){ // Verificar si es que existe el archivo a descargar
        $file = Storage::disk('local')->get($packageTourist->itinerario); // Obtener el archvio
        return Storage::disk('local')->download($packageTourist->itinerario); // Ordenar la descarga al navegador
      }
      return "No existe el archivo";

    }

    public function existItinerary(PackageTourist $packageTourist)
    {
      return (Storage::disk('local')->exists($packageTourist->itinerario));//Preguntar si existe un itinerario de ese paquete turistico
    }
}
