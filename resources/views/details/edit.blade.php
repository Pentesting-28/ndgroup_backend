@extends('layouts/template')
@section('seccion')

<nav aria-label="breadcrumb" >
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('list_show') }}">Listado</a></li>
    <li class="breadcrumb-item"><a href="{{ route('details', $data->id) }}">Detalles</a></li>
    <li class="breadcrumb-item active" aria-current="page">Actualizar información</li>
  </ol>
</nav>

@include('partials.validations')

<h3 class="alert alert-warning text-center" role="alert">
  Actualizar | {{ $data->properti }} <i class="fa fa-edit"></i>
</h3>

<form method="POST" class="form-inline m-0 py-5 card alert alert-info " role="alert" action="{{ route('update', $data->id) }}" enctype="multipart/form-data" class="needs-validation" novalidate >
	@csrf
	@method('PUT')
	@include('partials.proyect',['btnText' => 'Actualizar' ])
</form>

@endsection