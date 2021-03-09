@extends('layouts/template')
@section('seccion')

<section class="flex-column justify-content-center" >
   <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('inicio')}}">Inicio</a></li>
      <li class="breadcrumb-item active" aria-current="page">{!!$title!!}</li>
    </ol>
  </nav>
      <div class="container">
            <!-- Post Content Column -->
            <div class="col-md-12 px-0 py-3">
              <!-- Title -->
                <h1 class="p-2 bg-info text-white">CONSTRUIR & COMPRAR PARA RENTAR</h1>
                <!-- Author -->
                <p class="lead">
                  Por <label>ND REAL ESTATE MASTER ADVISORS</label>
                </p>
                <hr>
              <span class="posted-on">
                <a href="{{route('inicio')}}" rel="bookmark">
                 Publicado <b>20/Marzo/2021</b>
                </a>
              </span>
              <hr>
              <!-- Preview Image -->   
              <img src="{{ asset('/img/slider3.jpg')}}" class="img-fluid" alt="CONSTRUIR & RENTAR">
              <hr>

              <!-- Post Content -->
              <div class="entry-content">
                <h2>CONSTRUIR & COMPRAR PARA RENTAR</h2>
                <p class="custom-text card-text lead">Las formas más comunes hoy en día para obtener rendimientos y ganancias en la industria inmobiliaria, es construir propiedades o comprar para rentar. Es un tema que se toca mucho en la industria y existe mucha discusión sobre ello, pero aquí te vamos a explicar claramente qué representa mayores ganancias y por qué. </p>

               <h2>RENTAR</h2> 
                <p class="card-text lead" >Comprar una propiedad para rentarla si es negocio, solamente tenemos que evaluar <b>QUÉ TIPO DE PROPIEDAD COMPRAMOS.</b></p>

                <p class="card-text lead">Las mejores propiedades para comprar y después rentar son locales comerciales, ya que nos ofrecen un mayor rendimiento contra las propiedades para habitar y además no tenemos que invertir prácticamente nada en reparaciones o en daños que te hayan causado tus inquilinos.</p>

                <p class="card-text lead"><b>SOLAMENTE HAY 3 PAREDES QUÉ DAÑAR</b>, así que no nos preocuparemos mucho por el mantenimiento. Un local comercial bien rentado, nos va a representar un 9 o 10% de ganancia en base a la inversión que hicimos.</p>
                <h2>CONSTRUCCIÓN</h2>

                <p class="card-text lead">Comprar un terreno para construirlo es más trabajo y más tiempo implicado pero tu ganancia es muy buena. La clave para la construcción es contratar a una constructora integral, que se encargue de <b>TODO</b>, sí, de <b>TODO</b>.</p>

                <p class="card-text lead">¿A qué nos referimos? -Proyecto arquitectónico -Permisos y Licencias -Construcción -Presentación de ventas, Si inviertes con una constructora que realice los 4 pasos anteriores, entonces no gastarás tiempo ni esfuerzo en todo el proceso de construcción de la propiedad. Si es así,<b> CONSTRUIR REPRESENTA UNA MAYOR GANANCIA QUE RENTAR</b>, ya que en la 
              construcción vas a obtener una ganancia del 14 al 24% sobre tu inversión. Siempre 
              teniendo en cuenta contratar a la constructora clave para lograrlo.</p>
              </div> 
                    
              <div class="unit one-of-two mt-4">
                Etiquetas: <a href="#" rel="tag">Rentas</a>, 
                <a href="#" rel="tag">Ventas</a>,
                <a href="#" rel="tag">Propiedades</a>, 
                <a href="#" rel="tag">Casas</a> / Categoria: 
                <a href="#" rel="category tag">Bienes Raices</a>      
              </div>
              
            </div>
        </div>
</section>
@endsection('seccion')