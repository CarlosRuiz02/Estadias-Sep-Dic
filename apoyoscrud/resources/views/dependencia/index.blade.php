@extends('layouts.plantillabase')
@section('css')
<link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css">
@endsection
@section('contenido')

<div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Catalogos</li>
            </ol>
          </nav>
        <center>
            <h1>Catalogos</h1>
        </center>
    </div>
    <br>
    
        <div class="container"><h2>Dependencias</h2>
            <a class="btn" style="background-color: #ab0033; color: white;" data-bs-toggle="modal" data-bs-target="#agregardependencia">Registrar Dependencia</a>
            
            <br><br>
            
                <div class="row">
                <table id="dependencias" class="table table-striped table-bordered display nowrap" cellspacing="0" style="text-align: center;">
                <thead style="background-color: #ab0033;" class="text-white">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Municipio</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dependencias as $dependencia)
                    <tr>
                        <td>{{$dependencia->id}}</td>
                        <td>{{$dependencia->nombre}}</td>
                        <td>{{$dependencia->email}}</td>
                        <td>{{$dependencia->municipio}}</td>
                        <td>
                            <a class="btn btn-secondary dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #ab0033; color: white;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                  </svg>
                            </a>
                          
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#verdependencia"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                              </svg> Ver</a></li>
                              <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#editardependencia"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                              </svg> Editar</a></li>
                              <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#turnarpeticion"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                              </svg> Ver Usuarios</a></li>
                              <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="{{route('dependencias.destroy', $dependencia->id)}}" method='POST'>
                                        @csrf
                                        @method('DELETE')
                                        <button class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#borrarpeticion"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                        </svg> Eliminar</button>
                                    </form>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
        </div> 
    </div>
    <br>
    <div class="container"><h2>Tipos de apoyo</h2>
            <a class="btn" style="background-color: #ab0033; color: white;" data-bs-toggle="modal" data-bs-target="#agregardependencia">Registrar Tipo de Apoyo</a>
            
            <br><br>
            
                <div class="row">
                <table id="dependencias" class="table table-striped table-bordered display nowrap" cellspacing="0" style="text-align: center;">
                <thead style="background-color: #ab0033;" class="text-white">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tipo de apoyo</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
                </table>
        </div> 
    </div>
    @section('js')
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
            <script>
                $(document).ready(function () {
                    $('#dependencias').DataTable({
                        "lengthMenu":[[5,10,15,-1],[5,10,15, "ALL"]]
                        
                    });
                });
            </script>
            @endsection
    <!-- MODAL AGREGAR DEPENDENCIA -->
    <div class="modal fade " id="agregardependencia" tabindex="-1" aria-labelledby="agregardependenciaLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="agregardependenciaLabel">Registrar Dependencia</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="/dependencias" method="POST">
                    @csrf
                        <div class="container border">
                            <h2>Datos de la dependencia</h2>
                            <div class="margenes">
                                <div class="row">
                                    <div class="col-sm-5 col-md-12">
                                        <label for="" class="form-label">Nombre</label>
                                        <input id="nombre" name="nombre" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-5 col-md-12">
                                        <label for="" class="form-label">Email</label>
                                        <input id="email" name="email" type="email" class="form-control" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-5 col-md-12">
                                        <label for="" class="form-label">Municipio</label>
                                        <input id="municipio" name="municipio"type="text" class="form-control" required>
                                    </div>
                                </div>
                                <br>

                                <div class="mb-3">
                                    <center>
                                    <a href="/dependencias" class="btn" style="background-color:  #bc955c; color: white;">Cancelar</a>
                                    <button style="background-color:  #ab0033; color: white;" type="submit" class="btn">Guardar</button>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </form>  
                    </div>
                </div>
                </div>
            </div>  
            <!-- MODAL EDITAR DEPENDENCIA -->
            <div class="modal fade " id="editardependencia" tabindex="-1" aria-labelledby="editardependenciaLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editardependenciaLabel">Editar dependencia</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="/dependencias/{{$dependencia->id}}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="container border">
                            <h2>Datos de la dependencia</h2>
                            <div class="margenes">
                                <div class="row">
                                    <div class="col-sm-5 col-md-12">
                                        <label for="" class="form-label">Nombre</label>
                                        <input id="nombre" name="nombre"type="text" class="form-control" value="{{$dependencia->nombre}}" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-5 col-md-12">
                                        <label for="" class="form-label">Email</label>
                                        <input id="email" name="email"type="email" class="form-control" value="{{$dependencia->email}}" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-5 col-md-12">
                                        <label for="" class="form-label">Municipio</label>
                                        <input id="municipio" name="municipio"type="text" class="form-control" value="{{$dependencia->municipio}}" >
                                    </div>
                                </div>
                                <br>
                                <div class="mb-3">
                                    <center>
                                    <a href="/dependencias" class="btn" style="background-color:  #bc955c; color: white;">Cancelar</a>
                                    <button style="background-color:  #ab0033; color: white;" type="submit" class="btn">Guardar</button>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </form>  
                    </div>
                </div>
                </div>
            </div>
            <!-- MODAL VER DEPENDENCIA -->
            <div class="modal fade " id="verdependencia" tabindex="-1" aria-labelledby="verdependenciaLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="verdependenciaLabel">Ver dependencia</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="/dependencias/{{$dependencia->id}}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="container border">
                            <h2>Datos de la dependencia</h2>
                            <div class="margenes">
                                <div class="row">
                                    <div class="col-sm-5 col-md-12">
                                        <label for="" class="form-label">Nombre</label>
                                        <input id="nombre" name="nombre"type="text" class="form-control" value="{{$dependencia->nombre}}" disabled >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-5 col-md-12">
                                        <label for="" class="form-label">Email</label>
                                        <input id="email" name="email"type="email" class="form-control" value="{{$dependencia->email}}" disabled>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-5 col-md-12">
                                        <label for="" class="form-label">Municipio</label>
                                        <input id="municipio" name="municipio"type="text" class="form-control" value="{{$dependencia->municipio}}" disabled>
                                    </div>
                                </div>
                                <br>
                                <div class="mb-3">
                                    <center>
                                    <a href="/dependencias" class="btn" style="background-color:  #bc955c; color: white;">Cerrar</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </form>  
                    </div>
                </div>
                </div>
            </div>
@endsection