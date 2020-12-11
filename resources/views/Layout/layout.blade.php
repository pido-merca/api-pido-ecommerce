<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('titulo')</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="/CSS/layout.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body>
  <div class="wrapper ">
    <nav class="navbar navbar-expand-lg navbar-light bg-blue fixed-top">
      <div class="container">
        <a class="navbar-brand text-white" href="/"><strong>PideyMerco</strong></a>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <strong>Usuario</strong> 
            </a>
            <div class="dropdown-menu bg-blue" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item bg-blue text-white" href="#">Cerrar sesión</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid pl-0 ">
      <div class="row ">
        <div class="col-2 aside">
          <section>
            <aside>
              <div class="links">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white mt-5 font-weight-bold" id="navbarDropdownMenuLink"
                      role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-table"></i>
                      Aliado
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="{{ route('plan.index') }}">Plan</a>
                      <a class="dropdown-item" href="{{ route('categoria-aliado.index') }}">CategoriaAliado</a>
                      <a class="dropdown-item" href="{{ route('subcategoria.index') }}">Subcategoria</a>
                    </div>
                  </li>
                </ul>

                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Tabla2
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Subtabla1</a>
                    </div>
                  </li>
                </ul>

                 <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Tabla2
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Subtabla1</a>
                    </div>
                  </li>
                </ul>
            </aside>
          </section>
        </div>
        <div class="col-10">
          <section class="dinamic-content d-flex justify-content-center">
              @yield('contenido')
            
          </section>
        </div>

      </div>
    </div>
  </div>



  <!-- jQuery and JS bundle w/ Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
</body>

</html>