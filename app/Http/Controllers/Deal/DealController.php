<?php

namespace App\Http\Controllers\Deal;
use App\Http\Controllers\Controller;
use App\Models\Deal\Deal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class DealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $deals=Deal::paginate(20);
      //return view('Persons.Persons.index',compact('persons'));
      return view('Deal.deal',compact('deals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Deal.create');
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
                                'direccion'=>'required',
                                'telefono' =>  'required',
                                'email' =>  'required']); // Validar los datos del formulario
      $data = ['nombre' => $request->input('nombre'),'direccion' => $request->input('direccion'),
              'telefono' => $request->input('telefono'),'email' => $request->input('email')];// Datos a ingresar en la tabla rol
      Deal::create($data);
      Session::flash('message', 'Registro creado Correctamente');// retornar mensaje de registro correcto
      return redirect()->route('deal.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deal\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function show(Deal $deal)
    {
        return  view('Deal.show',compact('deal'));// Pasar el objeto para mostrar los datos del negocio
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deal\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function edit(Deal $deal)
    {
        return view('Deal.edit',compact('deal'));// Pasar los datos del negocio al formulario de edicion
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deal\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deal $deal)
    {
      $this->validate($request,['nombre'=>'required',
                                'direccion'=>'required',
                                'telefono' =>  'required',
                                'email' =>  'required']); // Validar los datos del formulario
      $data = ['nombre' => $request->input('nombre'),'descripcion' => $request->input('direccion'),
              'telefono' => $request->input('telefono'),'email' => $request->input('email')];// Datos a ingresar en la tabla rol
      $deal->update($data);
      Session::flash('message', 'Modificación correcta');
      return redirect()->route('deal.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deal\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deal $deal)
    {
        //
    }

    public function delete(Deal $deal)
    {
      Deal::destroy($deal->id_negocio); // Elminar el registro del negocio
      Session::flash('message', 'Registro eliminado correctamente'); // Mensaje de exito
      return redirect()->route('deal.index')->with('success','Eliminado satisfactoriamente');
    }
}
