@extends('layouts/template')
@section('seccion')
<nav aria-label="breadcrumb" >
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('inicio')}}">Inicio</a></li>
    <li class="breadcrumb-item active" aria-current="page">{!!$title!!}</li>
  </ol>
</nav>
<section class="flex-column justify-content-center" >
  <hr>
  <div class="row">
    <div class="col-md-12 ">
      <div class="items_list ">

        <div class="card mb-3 about" >
          <div class="row no-gutters"> 
            <div class="col-md-3">
              <img src="{{ asset('/img/logo.jpg')}}" class="img-thumbnail rounded-0" alt="{!!$title!!}">
            </div>
            <div class="col-md-9">
              <div class="card-body">
                <h4 class="card-title">NDGROUP</h4>
                <hr>
                <p class="card-text lead mb-2 custom-text">Nosotros somos un grupo integral, en el cual tenemos nodos varios de negocio en Real Estate, desde la comercialización de propiedades, remodelación, hasta desarrollo de proyectos inmobiliarios de valor agregado que nacen de la experiencia y resultados comprobables de haber construido y comercializado proyectos propios para ahora ampliar su alcance con inversionistas privados que desean generar rendimientos atractivos aportando capital y terrenos.</p>
                <p class="card-text lead">Desarrollamos proyectos pequeños o boutique que generen rendimiento rápido y concreto a los inversionistas que quieren innovar para obtener resultados tangibles. </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection('seccion')