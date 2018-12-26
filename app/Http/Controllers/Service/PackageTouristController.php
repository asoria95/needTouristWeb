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
        //
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
        //
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

    public function downloadItinerary(PackageTourist $packageTourist)
    {
      dd(self::existItinerary($packageTourist));
/*
      if(self::existItinerary($packageTourist)){ // Verificar si es que existe el archivo a descargar
        $file = Storage::disk('paquetesTuristicos')->get($packageTourist->itinerario); // Obtener el archvio
        return Storage::disk('paquetesTuristicos')->download($packageTourist->itinerario); // Ordenar la descarga al navegador
      }
      return "No existe el archivo";
      */
    }

    public function existItinerary(PackageTourist $packageTourist)
    {
      return (Storage::disk('paquetesTuristicos')->exists($packageTourist->itinerario));//Preguntar si existe un itinerario de ese paquete turistico
    }
}
