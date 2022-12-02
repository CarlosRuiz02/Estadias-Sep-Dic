<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciudadano;

class CiudadanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudadanos = Ciudadano::all();
        return view('ciudadano.index')->with('ciudadanos',$ciudadanos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ciudadano.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ciudadanos = new Ciudadano();

        $ciudadanos->curp = $request->get('curp');
        $ciudadanos->apellido_paterno = $request->get('apellido_paterno');
        $ciudadanos->apellido_materno = $request->get('apellido_materno');
        $ciudadanos->nombres = $request->get('nombres');
        $ciudadanos->estado = $request->get('estado');
        $ciudadanos->municipio = $request->get('municipio');
        $ciudadanos->telefono = $request->get('telefono');
        $ciudadanos->email = $request->get('email');

        $ciudadanos->save();

        return redirect('/ciudadanos');
        
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
        $ciudadano = Ciudadano::find($id);
        return ('ciudadano.edit')->with('ciudadano', $ciudadano);
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
        $ciudadano = Ciudadano::find($id);

        $ciudadano->curp = $request->get('curp');
        $ciudadano->apellido_paterno = $request->get('apellido_paterno');
        $ciudadano->apellido_materno = $request->get('apellido_materno');
        $ciudadano->nombres = $request->get('nombres');
        $ciudadano->estado = $request->get('estado');
        $ciudadano->municipio = $request->get('municipio');
        $ciudadano->telefono = $request->get('telefono');
        $ciudadano->email = $request->get('email');

        $ciudadano->save();

        return redirect('/ciudadanos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ciudadano = Ciudadano::find($id);
        $ciudadano -> delete();
        return redirect('/ciudadanos');
    }
}
