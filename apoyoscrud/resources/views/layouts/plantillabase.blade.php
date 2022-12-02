<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('css')
    <title>Sistema de Apoyos</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/escudo_tamaulipas.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
  <body>
     <!-- Logo y menus -->
    <div id="logo-redes">
        <div class="container">
            <div id="row-cabecera" class="row">

                <div class="col-md-6">
                    <a href="index.html">
                        
                    <img class="logotam img-responsive" src="{{ asset('img/logo_tamaulipas2022.png') }}" alt="Secretar&iacute;a de Finanzas - Gobierno del Estado de Tamaulipas">
                    </a>
                </div>

                <div class="col-md-7">
                </div>
            </div>
        </div>
    </div>
    
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid menu-secretarias">
            
            
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" style="background-color: #ab0033;" id="navbarSupportedContent">
            <ul class="navbar-nav  m-auto mb-lg-0">
                <li class="nav-item">
                    <a style="color: white;" class="nav-link  ms-3" aria-current="page" href="">Inicio</a>
                </li>
                <li class="nav-item">
                    <a style="color: white;" class="nav-link  ms-3" aria-current="page" href="/ciudadanos">Registro</a>
                </li>
                
                <li class="nav-item">
                    <a style="color: white;" class="nav-link  ms-3" aria-current="page" href="reportes.html">Reportes</a>
                </li>
                <li class="nav-item">
                    <a style="color: white;" class="nav-link  ms-3" aria-current="page" href="/dependencias">Catálogos</a>
                </li>
                <li class="nav-item dropdown">
                    <a style="color: white;" class="nav-link dropdown-toggle ms-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="">
                        Usuarios
                        </a>
                        <ul  style="background-color: #ab0033;" class="dropdown-menu">
                        <li><a style="color: white;" class="dropdown-item" href="registrar-usuario.html">Registrar Usuario</a></li>    
                        <li><a style="color: white;" class="dropdown-item" href="roles.html">Roles</a></li>
                        </ul>
                </li>
            </ul>
                
        </div>
        </div>
    </nav>

    <div class="container">
        @yield('contenido')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    @yield('js')
    </body>
</html>