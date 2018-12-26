<?php

namespace App\Http\Controllers\Persons;

use App\Http\Controllers\Controller;
use App\Models\Persons\Turist;
use App\Models\Persons\Persons;
use App\Models\Persons\Phones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TuristController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tourists=Turist::paginate(20);
      //return view('Persons.Persons.index',compact('persons'));
      return view('Tourist.tourist',compact('tourists'));
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
}
