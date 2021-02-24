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
			<div class="card p-5 bg-light">
				<div>
					<h3>{{ $data->properti }} | {{ $data->city }} <span class="btn text-white btn-dark py-0"><i class="fa text-white fa-check-circle"></i> {{ $data->status }} </span></h3>
				</div>
				<div class="card-body px-0">
					<h4 class="p-3 mb-2 bg-info text-white" >
					${{ $data->payments[0]['price'] }}{{ $data->payments[0]['coin']}}
					</h4>
					<ul class="list-group py-2">
						<li class="list-group-item pb-0 active"><h4>Características de la Propiedad</h4></li>
						<li class="list-group-item"><i class="far fa-check-square"></i> {{ $data->residency }}</li>
						<li class="list-group-item"><i class="far fa-check-square"></i> {{ $data->adress }}</li>
						<li class="list-group-item"><i class="far fa-check-square"></i> {{ $data->characteristics[0]['features'] }}</li>
						<li class="list-group-item"><i class="far fa-check-square"></i> {{ $data->characteristics[0]['amenities'] }}</li>
						<li class="list-group-item"><i class="far fa-check-square"></i> {{ $data->characteristics[0]['specialf'] }}</li>
						<li class="list-group-item"><i class="far fa-check-square"></i> {{ $data->characteristics[0]['information'] }}</li>
						<li class="list-group-item"><i class="far fa-check-square"></i> {{ $data->characteristics[0]['rooms'] }}</li>
						<li class="list-group-item"><i class="far fa-check-square"></i> {{ $data->characteristics[0]['bathrooms'] }}</li>
						<li class="list-group-item"><i class="far fa-check-square"></i> {{ $data->characteristics[0]['size'] }}</li>
						<li class="list-group-item"><i class="far fa-check-square"></i> {{ $data->characteristics[0]['details'] }}</li>
					</ul>
					@auth
					<ul class="list-group py-2">
						<li class="list-group-item pb-0 active"><h4>Más Información</h4></li>
						<li class="list-group-item">Latitud {{ $data->coordinates[0]['latitude'] }}</li>
						<li class="list-group-item">Longitud {{ $data->coordinates[0]['length'] }}</li>
						<li class="list-group-item"><i class="fa fa-envelope  mr-2"></i> {{ $data->contacts[0]['email'] }}</li>
						<li class="list-group-item"><i class="fa fa-phone  mr-2"></i> {{ $data->contacts[0]['phone'] }}</li>
					</ul>
					@endauth
				</div>
			</div>
			<hr>
			<div class="col-md-12 p-3 mb-2 bg-light text-white">
				<form action="{{ route('sendMailInformation') }}" method="POST" class="form-inline p-4" >
					<div class="row">
						@csrf
						<div class="form-group col-md-4 p-0">
							<div class="row d-flex justify-content-center" >
								<a href="/">
									<img src="{{ asset('/img/logo.jpg')}}" class="card-img-top" alt="ndgroup.mx" >
								</a>
								<ul class="list-group py-2">
									<li class="list-group-item text-dark"><i class="fa fa-building mr-2"></i> Cancún, Quintana Roo 77503 | México</li>
									<li class="list-group-item"><a class="text-dark" href="tel:5219982425617"><i class="fa fa-phone  mr-2"></i> 998 242 5617</a></li>
									<li class="list-group-item"><a class="text-dark" href="mailto:direccion@ndgroup.mx"><i class="fa fa-envelope  mr-2"></i> direccion@ndgroup.mx</a></li>
									<li class="list-group-item">
										<a class="btn btn-light" target="_blank" href="https://www.facebook.com/nrealestate38"><i class="fa fa-facebook"></i></a>
										<a class="btn btn-light" target="_blank" href="https://www.instagram.com/nd.realestatecun/"><i class="fa fa-instagram"></i></a>
										<a class="btn btn-light" target="_blank" href="https://api.whatsapp.com/send?phone=5219982425617&text=Hola,%20información%20del%20inmueble."><i class="fa fa-whatsapp"></i></a>
										<a class="btn btn-light" href="mailto:direccion@ndgroup.mx"><i class="fa fa-envelope"></i></a>
									</li>
								</ul>
							</div>
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
							<input type="hidden" name="property_id" value="{{ $data->id }}">
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
								<textarea class="col-md-12 without custom" placeholder="Comentarios" name="content" >{{ old('content') }}</textarea>
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