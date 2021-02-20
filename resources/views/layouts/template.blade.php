<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!--Meta Tags-->
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}"  />
    <meta name="apple-mobile-web-app-status-bar-style" content="#181818">
    <meta name="theme-color" content="#181818">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="cillum dolore eu fugiat nulla pariatur mollit anim id est laborum." />
    <meta name="keywords" content="quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo." />
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="https://ndgroup.mx/img/logo.jpg" type="image/x-icon" />
    
    <title> {{ config('app.name') }} | ndgroup.mx </title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url"           content="https://ndgroup.mx/" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum." />
    <meta property="og:description"   content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam" />
    <meta property="fb:app_id"          content="111592683653923" />
    <meta property="og:image" content="https://ndgroup.mx/img/logo.jpg" />
    <meta property="og:image:alt" content="quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse" />
   
    <!--CSS-->
    <link type="text/css" rel="stylesheet" media="screen" href="{{ asset('/css/fonts/fonts.css')}}" ></link>
    <link type="text/css" rel="stylesheet" media="screen" href="{{ asset('/css/fonts/fonts_icons.css')}}" ></link>
    <link type="text/css" rel="stylesheet" media="screen" href="{{ asset('/css/fonts/all.min.css')}}" ></link>
    <link type="text/css" rel="stylesheet" media="screen" href="{{ asset('/css/bootstrap.css')}}" ></link>
    <link type="text/css" rel="stylesheet" media="screen" href="{{ asset('/css/toastr.css')}}" ></link>
    <link type="text/css" rel="stylesheet" media="screen" href="{{ asset('/css/main.css')}}" ></link>
    <link type="text/css" rel="stylesheet" media="screen" href="{{ asset('/css/jquery-ui.css')}}" ></link>
    
    <!--JS-->
    <script type="text/javascript" language="javascript" src="{{ asset('/js/jquery-3.3.1.js')}}" ></script>
    <script type="text/javascript" language="javascript" src="{{ asset('/js/jquery-ui.js')}}" ></script>    
    <script type="text/javascript" language="javascript" src="{{ asset('/js/popper.js')}}" ></script>
    <script type="text/javascript" language="javascript" src="{{ asset('/js/bootstrap.js')}}" ></script>
    <script type="text/javascript" language="javascript" src="{{ asset('/js/stringToSlug.js')}}" ></script>
    <script type="text/javascript" language="javascript" src="{{ asset('/js/toastr.js')}}" ></script>
    <script type="text/javascript" language="javascript" src="{{ asset('/js/config.js')}}" ></script> 
   
    
  </head>
  <body>
    <div class="container-fluid justify-content-center m_bg">
      <header class="justify-content-center" >

              <!-- Header Desktop-->
        <ul class="nav justify-content-center desktop">
            
          <li class="nav-item {{ setActive('inicio') }}">
            <a class="nav-link " href="{{route('inicio')}}"><img class="logo" src="{{ asset('/img/logo.jpg')}}" alt="Logo"  /></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('list_show')}}">Buscar Propiedades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact')}}">Blog ndgroup</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact')}}">Acerca de Nosotros</a>
          </li>
          <li class="nav-item {{ setActive('contact') }} ">
            <a class="nav-link " href="{{route('contact')}}">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact')}}">Vende tu Propiedad</a>
          </li>

          @auth

          <li class="nav-item">

              <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Opción
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item mb-2" href="{{route('register')}}" role="button"><i class="fa fa-user"></i> Agregar usuario</a>
                  <a class="dropdown-item" href="{{route('crear')}}" role="button"><i class="fa fa-building"></i> Agregar propiedad</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item logout" href="#">{{ auth()->user()->name }} | Cerrar Sesión</a>
                </div>
              </div>

          </li>

          @else
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#login" href="#">Iniciar Sesión / Registrarse </a>
          </li>

         @endauth

        </ul>
        <!-- movile -->
        <nav class="p-0 movile" >
          <div class="col-12 p-0 d-flex" >
            <ul class="navbar-nav menu_top col-12 p-0 " >
              <li class="col-4 px-0 py-2 menu_m">
                <a href="{{route('inicio')}}"><img src="{{ asset('/img/logo.jpg')}}" class="rounded-0" alt="Logo"  /></a>
              </li>

              @auth

              <li class="col-5 justify-content-end d-flex login-register p-0 " >

              <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Opción
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item mb-2" href="{{route('register')}}" role="button"><i class="fa fa-user"></i> Agregar usuario</a>
                  <a class="dropdown-item" href="{{route('crear')}}" role="button"><i class="fa fa-building"></i> Agregar propiedad</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item logout" href="#">{{ auth()->user()->name }} | Cerrar Sesión</a>
                </div>
              </div>

              </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

              @else
              
              <li class="col-5 justify-content-end d-flex login-register p-0 " >
                <a href="{{ route('login') }}">Iniciar Sesión / Registrarse</a>
              </li>

              @endauth
              <li class="col-2 justify-content-end d-flex px-0" >
                <button id="menu_f" class="navbar navbar-light bg-dark" type="button" >
                <span class="fa fa-navicon"></span>
                </button>
              </li>
            </ul>
          </div>
        </nav>
        <div class="row justify-content-end mb-4 sendlist" >
          <div class="col-sm-4">
            <a href="{{ route('list_show')}}" class="btn btn-success" >Ver Propiedades</a>
          </div>
        </div>
      </header>
      <main class="justify-content-center" >

      @include('partials.login')
        
      @yield('seccion')<hr>

      @include('partials.form')

      </main>

    <div id="menu_item">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('list_show')}}">Buscar Propiedades</a>
        </li>
        <li class="nav-item rent">           
          <a class="nav-link" href="{{ route('list_show')}}?_token=ourAagSS2fOfq31ItkHctMjITWY4rgZsiLuv8r6Y&name=&status=En+Renta&city=Todas+las+ciudades&price="><i class="fas fa-angle-right"></i> En Renta</a>
        </li>
        <li class="nav-item rent">          
          <a class="nav-link" href="{{ route('list_show')}}?_token=ourAagSS2fOfq31ItkHctMjITWY4rgZsiLuv8r6Y&name=&status=En+Venta&city=Todas+las+ciudades&price="><i class="fas fa-angle-right"></i> En Venta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contact')}}">Blog ndgroup</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contact')}}">Acerca de Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contact')}}">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contact')}}">Vende tu Propiedad</a>
        </li>
      </ul>
    </div>

    </div>

    <footer class="col-md-12 fotter" >
      <nav class="col-md-6 col-12 px-0 mx-0 justify-content-center" >
        <ul class="mr-auto row justify-content-center" >
          <li class="nav-item" ><a href="{{ route('list_show')}}" >Buscar Propiedades</a></li>
          <li class="nav-item" ><a href="{{ route('contact')}}">Blog ndgroup</a></li>
          <li class="nav-item" ><a href="{{ route('contact')}}">Acerca de Nosotros</a></li>
          <li class="nav-item {{ setActive('contact') }}" ><a href="{{route('contact')}}">Contacto</a></li>
          <li class="nav-item" ><a href="{{ route('contact')}}">Vende tu Propiedad</a></li>
        </ul>
      </nav>
      <nav class="col-md-6 px-0 col-12 justify-content-center" >
        <p class="mr-auto row justify-content-center copy_r ">© 2020 ndgroup Real estate, Todos Los Derechos Reservados. </p><
      </nav>
    </footer>

    <input type="hidden" id="bsm_map_content">
    
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqBPws5a6AripWzjun2W5klv21yJdYS_E&amp;callback=initMap"></script>
  </body>
</html>