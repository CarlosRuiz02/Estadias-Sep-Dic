<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dependencia;

class DependenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dependencias = Dependencia::all();
        return view('dependencia.index')->with('dependencias',$dependencias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dependencia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dependencias = new Dependencia();

        $dependencias->nombre = $request->get('nombre');
        $dependencias->email = $request->get('email');
        $dependencias->municipio = $request->get('municipio');
        

        $dependencias->save();

        return redirect('/dependencias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dependencia = dependencia::find($id);
        return ('dependencia.edit')->with('dependencia', $dependencia);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dependencia = dependencia::find($id);

        $dependencia->nombre = $request->get('nombre');
        $dependencia->email = $request->get('email');
        $dependencia->municipio = $request->get('municipio');

        $dependencia->save();

        return redirect('/dependencias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dependencia = dependencia::find($id);
        $dependencia -> delete();
        return redirect('/dependencias');
    }
}
