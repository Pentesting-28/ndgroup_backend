@extends('layouts/template')
@section('seccion')

<section class="flex-column justify-content-center" >
   <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('inicio')}}">Inicio</a></li>
      <li class="breadcrumb-item active" aria-current="page">{!!$title!!}</li>
    </ol>
  </nav>
  <div class="row">
      <div class="container">
	      	<div class="row">

	        </div>
	   </div>
	</div>
</section>
@endsection('seccion')