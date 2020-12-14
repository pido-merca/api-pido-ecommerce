<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('titulo')</title>
  <link rel="stylesheet" href="{{asset('icons/all.min.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/layout.css')}}">
</head>

<body>

  <div class="container-fluid p-0">
    <div class="row no-gutters">
      <div class="col-lg-2">
        <div class="aside">
          @include('layout.menu')
        </div>
      </div>
      <div class="col-lg-10">
        <div class="content-main">
          <nav class="navbar navbar-main">
            <div class="dropdown ml-auto">
              <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Edwin José Florez Peralta
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Cerra sesión</a>
              </div>
            </div>
          </nav>
          <div class="container">
            <div class="row mt-4">
                @yield('sub-menu')
            </div>
            <div class="row mt-2">
              <div class="col-12">
                @yield('contenido')
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- jQuery and JS bundle w/ Popper.js -->
  @yield('scripts')
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>