@extends('layouts/template')
@section('seccion')
{{--Validacion--}}
@include('partials.validations')
@include('partials.box')
<nav aria-label="breadcrumb" >
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('inicio')}}">Inicio</a></li>
		<li class="breadcrumb-item"><a href="{{route('list_show')}}">Listado</a></li>
		<li class="breadcrumb-item active" aria-current="page">Detalles <i class="fa fa-building"></i> </li>
	</ol>
</nav>
<div class="row">
	<div class="text-center col-md-12">
		<img src="{{ $data->images[0]['main_img'] }}" class="img-fluid" alt="{{ $data->properti }}">
		<hr>
	</div>
	<div class="col-md-10">
		<div class="container">
			<div class="card">
				<h3 class="px-4 mt-4 mb-0 " >{{ $data->properti }} | <span class="btn btn-info py-0"><i class="fa fa-check-circle"></i> {{ $data->status }} </span></h3>
				<h4 class="px-4 my-0" >{{ $data->city }}</h4> 
				<div class="card-body">
					<h5 class="card-title"><i class="fa fa-house-damage"></i> {{ $data->city }}</h5>
					<p class="card-text"><i class="fa fa-hand-holding-usd"></i> 
						{{ $data->payments[0]['coin']}} {{ $data->payments[0]['price'] }}
					</p>
					<p class="card-text">Residencial = {{ $data->residency }}</p>
					<p class="card-text">Dirección = {{ $data->adress }}</p>
					<p class="card-text">Características = {{ $data->characteristics[0]['features'] }}</p>
					<p class="card-text">Amenidades = {{ $data->characteristics[0]['amenities'] }}</p>
					<p class="card-text">Características especiales = {{ $data->characteristics[0]['specialf'] }}</p>
					<p class="card-text">Información = {{ $data->characteristics[0]['information'] }}</p>
					<p class="card-text">Habitaciones = {{ $data->characteristics[0]['rooms'] }}</p>
					<p class="card-text">Baños = {{ $data->characteristics[0]['bathrooms'] }}</p>
					<p class="card-text">Tamaño del area = {{ $data->characteristics[0]['size'] }}</p>
					<p class="card-text">Detalles = {{ $data->characteristics[0]['details'] }}</p>
					<p class="card-text">Latitud = {{ $data->coordinates[0]['latitude'] }}</p>
					<p class="card-text">Longitud = {{ $data->coordinates[0]['length'] }}</p>
					<p class="card-text">Correo = {{ $data->contacts[0]['email'] }}</p>
					<p class="card-text">Teléfono = {{ $data->contacts[0]['phone'] }}</p>
				</div>
			</div>
			<hr>
			<div class="col-md-12 bg-light text-white">
				<form action="{{ route('sendmail') }}" method="POST" class="form-inline p-4" >
					<div class="row">
						@csrf
						<div class="form-group col-md-4 p-0">
							<img class="logo" src="{{ asset('/img/logo.jpg')}}" alt="Logo"  />
						</div>
						<div class="form-group col-md-8 p-0">
							<!-- Grid column -->
							<div class="col-md-12 mb-4">
								<h5 class="widget-title text-dark mb-0">Solicitar más Información</h5>
								<hr>
								<select name="current" class="custom">
									<option value="Quiero saber más acerca de este listado">Quiero saber más acerca de este listado</option>
									<option value="Solicitar una visita">Solicitar una visita</option>
								</select>
							</div>
							<!-- Grid column -->
							<div class="col-md-12 mb-4">
								<input type="text" class="custom" placeholder="Nombre" name="name" value="{{ old('name') }}" required autocomplete="off" >
								{!! $errors->first('name','<div class="invalid-feedback" role="alert" >:message</div>') !!}
							</div>
							<!-- Grid column -->
							<div class="col-md-12 mb-4">
								<input type="email" class="custom" placeholder="Correo electrónico" name="email" value="{{ old('email') }}" required autocomplete="off" >
								{!! $errors->first('email','<div class="invalid-feedback" role="alert" >:message</div>') !!}
							</div>
							<!-- Grid column -->
							<div class="col-md-12 mb-4">
								<input type="text" class="phone custom" placeholder="Teléfono" name="phone" maxlength="10" value="{{ old('phone') }}" required autocomplete="off" >
								{!! $errors->first('phone','<div class="invalid-feedback" role="alert" >:message</div>') !!}
							</div>
							<!-- Grid column -->
							<div class="col-md-12 mb-4 content">
								<textarea id="content" class="col-md-12 without custom" name="content" >{{ old('content') }}</textarea>
							</div>
						</div>
						
						<div class="col-md-12 d-flex justify-content-center">
							<input type="submit" class="btn btn-info" value="Solicitar Información">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	@auth
	<div class="col-md-2 ">
		<div class="card">
			<div class="card-body col-md-12 "> 
				<a class="btn btn-primary text-decoration-none col-md-12 mb-3" href="{{ route('editar', $data->id ) }}" role="button">Editar</a>
				<form method="POST" class="col-md-12 p-0" id="deleteF" action="{{ route('delete', $data->id ) }}">
					@csrf 
					@method('DELETE')
					<button type="button" data-toggle="modal" data-target="#confirmD" class="btn btn-danger text-light col-md-12" >Eliminar</button>
				</form>
				<div class="modal fade" id="confirmD" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<b>Eliminar {{ $data->properti }}?</b>
							</div>
							<div class="modal-body">
								¡Se perdera de la lista!
							</div>
							<div class="modal-footer">
								<button type="button" class="border border-info btn btn-default" data-dismiss="modal">Cancel</button>
								<a id="btnD" class="btn btn-danger">Delete</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endauth
</div>
@endsection