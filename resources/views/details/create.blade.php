@extends('layouts/template')
@section('seccion')

<nav aria-label="breadcrumb" >
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('inicio')}}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{route('list_show')}}">Listado</a></li>
    <li class="breadcrumb-item active" aria-current="page">Almacenar propiedad</li>
  </ol>
</nav>

@include('partials.validations')

<h3 class="alert alert-primary text-center" role="alert">
  Agregar nueva propiedad <i class="fa fa-building"></i>
</h3>

<form method="POST" class="form-inline m-0 py-5 card alert alert-info " role="alert" action="{{route('store')}}" enctype="multipart/form-data" >
	@csrf
	@include('partials.formCreate', ['btnText' => 'Guardar' ])
</form>

@endsection