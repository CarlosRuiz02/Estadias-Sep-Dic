@extends('layouts.plantillabase')

@section('contenido')

<div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item">Registro</li>
              <li class="breadcrumb-item active" aria-current="page">Registrar Ciudadano</li>
            </ol>
          </nav>
        <center>
            <h1>EDITAR CIUDADANO</h1>
        </center>
    </div>
    <br>
    <div class="container">
        <form action="/ciudadanos/{{$ciudadano->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="container border">
                <h2>Datos del Ciudadano</h2>
                <div class="margenes">
                    <div class="row">
                        
                        <div class="col-sm-5 col-md-6">
                            <label for="" class="form-label">CURP</label>
                            <input id="curp" name="curp"type="text" class="form-control" value="{{$ciudadano->curp}}" required>
                        </div>
                        <div class="col-sm-5 col-md-3">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-5 col-md-3">
                            <label for="" class="form-label">Apellido Paterno</label>
                            <input id="apellido_paterno" name="apellido_paterno" type="text" class="form-control"  value="{{$ciudadano->apellido_paterno}}" required>
                        </div>
                        <div class="col-sm-5 col-md-3">
                            <label for="" class="form-label">Apellido Materno</label>
                            <input id="apellido_materno" name="apellido_materno" type="text" class="form-control" value="{{$ciudadano->apellido_materno}}" required>
                        </div>
                        <div class="col-sm-5 col-md-6">
                            <label for="" class="form-label">Nombres</label>
                            <input id="nombres" name="nombres" type="text" class="form-control" value="{{$ciudadano->nombres}}" required>
                        </div>
                    </div>
                    <br>
                    
                    <div class="row">
                        <div class="col-sm-5 col-md-6">
                            <label for="" class="form-label">Número de télefono</label>
                            <input id="telefono" name="telefono" type="number" class="form-control" value="{{$ciudadano->telefono}}" required>
                        </div>
                        <div class="col-sm-5 col-md-6">
                            <label for="" class="form-label">Correo electrónico</label>
                            <input id="email" name="email" type="email" class="form-control" placeholder="ejemplo@gmail.com" value="{{$ciudadano->email}}" required>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3">
                        <center>
                        <a href="/ciudadanos" class="btn" style="background-color:  #bc955c; color: white;">Cancelar</a>
                        <button type="submit" style="background-color:  #ab0033; color: white;"  class="btn">Guardar</button>
                        </center>
                    </div>
                </div>
            </div>
        </form>            
    </div>
    <br>

@endsection