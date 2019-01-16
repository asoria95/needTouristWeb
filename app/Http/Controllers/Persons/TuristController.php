<?php

namespace App\Http\Controllers\Persons;

use App\Http\Controllers\Controller;
use App\Models\Persons\Turist;
use App\Models\Persons\Persons;
use App\Models\Persons\Phones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Service\Service;
use App\Models\Service\ServiceTurist;
use App\Models\Service\PackageTourist;
class TuristController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //Auth::user()->email;
      //$tourists=Turist::paginate(20);
      //return view('Persons.Persons.index',compact('persons'));
      //return view('Tourist.tourist',compact('tourists'));
      return view('Tourist.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Tourist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $this->validate($request,[  'nombre'=>'required',
                                  'email'=>'required',
                                  'telefono'=>'required',]);
      $data = ['nombre' => $request->input('nombre'), 'email' => $request->input('email')];
      $person = Persons::create($data);
      $data = ['id_turista' =>  $person->id_persona, 'idioma' =>  $request->input('idioma'), 'residencia' => $request->input('residencia')];
      Turist::create($data);

      $phone = $request->input('telefono');
      if( $phone != null){
        $data = ['id_persona' =>  $person->id_persona, 'telefono' =>  $phone];
        Phones::create($data);
      }

      Session::flash('message', 'Registro ingresado Correctamente');
      return redirect()->route('tourist.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Turist  $turist
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $tourist=Turist::find($id);
      return  view('Tourist.show',compact('tourist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Turist  $turist
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $tourist=Turist::find($id);
      return view('Tourist.edit',compact('tourist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Turist  $turist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request,[ 'nombre'=>'required', 'email'=>'required']);
      $data = ['nombre' => $request->input('nombre'), 'email' => $request->input('email')];
      Persons::find($id)->update($data);
      $data = ['idioma' =>  $request->input('idioma'), 'residencia' => $request->input('residencia')];
      Turist::find($id)->update($data);
      return redirect()->route('tourist.index')->with('success','Modificado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Turist  $turist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turist  $turist)
    {

    }

    public function delete(Turist  $tourist)
    {

      //dd($tourist->id_turista);
      Persons::destroy($tourist->id_turista);
      Session::flash('message', 'Registro eliminado Correctamente');
      return redirect()->route('tourist.index')->with('success','Modificado satisfactoriamente');
    }

    public function requestTouristPackage($id)
    {
      $tourist = Turist::find($id);
      $services =Service::paginate(20);
      //$packageTourist = PackageTourist::find()
      return view('Tourist.requestPackageTourist',compact('tourist','services'));
    }

    public function ajaxRequest(Request $request)
      {
        $idServicio = $request->input('idServicio');
        $service = Service::where('id_servicio',$idServicio)->first();

        return response()->json(['servicio' => $service,'paquete'=> $service->package]);
        //return response()->json(['datos' => $input]);
    }

    public function solicitarPaquete(Request $request)
    {
      $response = ['message' => 'Usted ya cuenta con este paquete ', 'messageType' => 'error'];

      $data = ['cantidad' => $request->input('numero'),
               'fecha' =>    $request->input('fecha'),
               'id_servicio' => $request->input('idServicio'),
               'id_turista' => $request->input('idTurista')
      ]; // Datos para realizar el ingreso
     $serviceTourist = ServiceTurist::where([
        'id_servicio' => $request->input('idServicio'),
        'id_turista' => $request->input('idTurista')])->first(); // En caso de ya haber contratado ese paquete
     if($serviceTourist == null){
       $serviceTourist = ServiceTurist::create($data);
       $response = ['message' => 'Paquete solicitado Correctamente', 'messageType' => 'succes'];
     }
      //return response($data);
      return response()->json($response);
      //return redirect('Tourist.requestPackageTourist')
        //->with('message', 'New customer added successfully.')
        //->with('message-type', 'success');
    }


    public function serviciosDeUnTurista(Request $request)
    {
      $data = array();
      $servicesTourist = ServiceTurist::where('id_turista',$request->input('idTurista'))->orderBy('fecha', 'desc')->get();

      foreach ($servicesTourist as $serviceTourist) {
        $service = Service::find($serviceTourist->id_servicio);
        $package = PackageTourist::find($service->id_paquete);
        $datos = [
          'servicioTurista' => $serviceTourist,
          'servicio' => $service,
          'paquete' => $package
        ];

        array_push($data,$datos);
      }



      $servicesTourist->toJson();
      return response()->json($data);
    }
    public function home()
    {
      // code...
    }
}
