<?php

namespace App\Http\Controllers\Persons;

use App\Http\Controllers\Controller;
use App\Models\Persons\Phones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class PhonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $phones=Turist::paginate(20);
      //return view('Persons.Persons.index',compact('persons'));
      return view('Phones.phone',compact('tourists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persons\Phones  $phones
     * @return \Illuminate\Http\Response
     */
    public function show(Phones $phones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persons\Phones  $phones
     * @return \Illuminate\Http\Response
     */
    public function edit(Phones $phones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persons\Phones  $phones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phones $phones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persons\Phones  $phones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phones $phones)
    {
        //
    }
}
