<?php

namespace App\Http\Controllers\Persons;

use App\Http\Controllers\Controller;
use App\Models\Persons\Turist;
use Illuminate\Http\Request;

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
      $this->validate($request,[ 'nombre'=>'required', 'email'=>'required']);
      $data = ['nombre' => $request->input('nombre'), 'email' => $request->input('email')];
      $person = Persons::create($data);
      $data = ['id_turista' =>  $person->id_persona, 'idioma' =>  $request->input('idioma'), 'residencia' => $request->input('residencia')];
      Turist::create($data);
      return redirect()->route('turist.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Turist  $turist
     * @return \Illuminate\Http\Response
     */
    public function show(Turist $turist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Turist  $turist
     * @return \Illuminate\Http\Response
     */
    public function edit(Turist $turist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Turist  $turist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turist $turist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Turist  $turist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turist $turist)
    {
        //
    }
}
