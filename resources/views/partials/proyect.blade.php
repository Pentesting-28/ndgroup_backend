<div class="row">
	<div class="col-md-10 p-0 d-flex align-items-start">
		<div class="form-group col-md-6 p-0">
			<div class="col-md-12 mb-3">
				<input type="text" class="form-control" id="properti" name="properti" value="{{old('properti', $data->properti)}}" placeholder="Propiedad" autocomplete="off" >
				{!! $errors->first('properti','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
			<div class="col-md-12 mb-3">
				<select name="city" class="form-control">
					<option value="Cancún" @if($data->city == 'Cancún') {{ 'selected' }} @endif>Cancún</option>
					<option value="Playa del carmen" @if($data->city == 'Playa del carmen') {{ 'selected' }} @endif>Playa del carmen</option>
					<option value="Puerto morelos" @if($data->city == 'Puerto morelos') {{ 'selected' }} @endif>Puerto morelos</option>
					<option value="Tulum" @if($data->city == 'Tulum') {{ 'selected' }} @endif>Tulum</option>
				</select>
			</div>
			<div class="col-md-12 mb-3">
				<input type="text" class="form-control" name="residency" value="{{old('residency', $data->residency)}}" placeholder="Residencial" autocomplete="off" >
				{!! $errors->first('residency','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
			<div class="col-md-12 mb-3">

				<input type="text" class="form-control" value="{{ old('price', $data->payments[0]['price']) }}" name="price" placeholder="Precio" autocomplete="off" >
				{!! $errors->first('price','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
			<div class="col-md-12 mb-3">
				<select name="coin" class="form-control" required>
					<option value="us" @if($data->payments[0]['coin'] == 'us') {{ 'selected' }} @endif>us</option>
					<option value="mx" @if($data->payments[0]['coin'] == 'mx') {{ 'selected' }} @endif>mx</option>
				</select>
			</div>
			<div class="col-md-12 mb-3">
				<input type="text" class="form-control" value="{{old('adress', $data->adress)}}" name="adress" placeholder="Dirección" autocomplete="off" >
				{!! $errors->first('adress','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
			<div class="col-md-12 mb-3">
				<textarea type="text" class="form-control without" name="features" placeholder="Características" >{{old('features', $data->characteristics[0]['features'])}}</textarea>
				{!! $errors->first('features','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
			<div class="col-md-12 mb-3">
				<textarea type="text" class="form-control without" name="amenities" placeholder="Amenidades" >{{old('amenities', $data->characteristics[0]['amenities'])}}</textarea>
				{!! $errors->first('amenities','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
			<div class="col-md-12 mb-3">
				<textarea type="text" class="form-control without" name="specialf" placeholder="Instalaciones especiales" >{{old('specialf', $data->characteristics[0]['specialf'])}}</textarea>
				{!! $errors->first('specialf','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
			<div class="col-md-12 mb-3">
				<textarea type="text" class="form-control without" name="information" placeholder="Información" >{{old('information', $data->characteristics[0]['information'])}}</textarea>
				{!! $errors->first('information','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
		</div>
		<div class="form-group col-md-6 p-0">
			<div class="col-md-12 mb-3">
				<select name="rooms" class="form-control">
					<option value="0" @if($data->characteristics[0]['rooms'] == '0') {{ 'selected' }} @endif>Habitaciones</option>
					<option value="1" @if($data->characteristics[0]['rooms'] == '1') {{ 'selected' }} @endif>1</option>
					<option value="2" @if($data->characteristics[0]['rooms'] == '2') {{ 'selected' }} @endif>2</option>
					<option value="3" @if($data->characteristics[0]['rooms'] == '3') {{ 'selected' }} @endif>3</option>
					<option value="4" @if($data->characteristics[0]['rooms'] == '4') {{ 'selected' }} @endif>4</option>
					<option value="5" @if($data->characteristics[0]['rooms'] == '5') {{ 'selected' }} @endif>5</option>
				</select>
			</div>
			
			<div class="col-md-12 mb-3">
				<select name="bathrooms" class="form-control">
					<option value="0" @if($data->characteristics[0]['bathrooms'] == '0') {{ 'selected' }} @endif>Baños</option>
					<option value="1" @if($data->characteristics[0]['bathrooms'] == '1') {{ 'selected' }} @endif>1</option>
					<option value="2" @if($data->characteristics[0]['bathrooms'] == '2') {{ 'selected' }} @endif>2</option>
					<option value="3" @if($data->characteristics[0]['bathrooms'] == '3') {{ 'selected' }} @endif>3</option>
					<option value="4" @if($data->characteristics[0]['bathrooms'] == '4') {{ 'selected' }} @endif>4</option>
					<option value="5" @if($data->characteristics[0]['bathrooms'] == '5') {{ 'selected' }} @endif>5</option>
				</select>
			</div>
			<div class="col-md-12 mb-3">
				<select name="status" class="form-control" >
					<option value="Destacado" @if($data->status == 'Destacado') {{ 'selected' }} @endif>Destacado</option>
					<option value="En Renta" @if($data->status == 'En Renta') {{ 'selected' }} @endif>En renta</option>
					<option value="En Venta" @if($data->status == 'En Venta') {{ 'selected' }} @endif>En venta</option>
					<option value="Predio" @if($data->status == 'Predio') {{ 'selected' }} @endif>Predio</option>
					<option value="Propiedad" @if($data->status == 'Propiedad') {{ 'selected' }} @endif>Propiedad</option>
				</select>
			</div>
			<div class="col-md-12 mb-3">
				<input type="text" class="form-control" value="{{old('size', $data->characteristics[0]['size'])}}" name="size" placeholder="Medidas" autocomplete="off">
				{!! $errors->first('size','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
			
			<div class="col-md-12 mb-3">
				<textarea type="text" class="form-control without" value="{{old('details', $data->characteristics[0]['details'])}}" name="details" placeholder="Detalles" >{{old('details', $data->characteristics[0]['details'])}}</textarea>
				{!! $errors->first('details','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
			<div class="col-md-12 mb-3">
				<a data-toggle="modal" data-target="#mapviews" href="#">Actualizar ubicación{{--<img class="map_pin" src="{{ asset('/img/map1.jpg')}}" alt="Ubicación de la propiedad" >--}}</a>
				@include('partials.map')
			</div>
			<div class="col-md-12 mb-3">
				<input type="text" class="form-control" value="{{old('url', $data->url)}}" name="url" placeholder="URL" id="url" autocomplete="off">
				{!! $errors->first('url','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
			<div class="col-md-12 mb-3">
				<input type="email" class="form-control" value="{{old('email', $data->contacts[0]['email'])}}" name="email" placeholder="Correo" autocomplete="off" >
				{!! $errors->first('email','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
			<div class="col-md-12 mb-3">
				<input type="text" maxlength="10" class="form-control phone" value="{{old('phone', $data->contacts[0]['phone'])}}" name="phone" id="phone" placeholder="Telefono" autocomplete="off" >
				{!! $errors->first('phone','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
		</div>
	</div>

	<div class="col-md-2 p-0" >		
		<div class="col-md-12 p-2 card justify-content-center text-center" >
		<div class="alert alert-light border-0 rounded-0 m-0" role="alert">Imágen principal</div>
			<img src="{{asset( old('thumbnail', $data->images[0]['thumbnail']))}}" class="card-img-top preview" alt="{{old('properti', $data->properti)}}" >
			<div class="position-relative p-0">
				<input type="file" class="custom-file-input absolute-bottom" value="{{$data->images[0]['thumbnail']}}" name="thumbnail" id="thumbnail" >
				<label class="btn btn-primary custom-file-label absolute-bottom border-0 rounded-0" for="thumbnail"></label>
				{!! $errors->first('thumbnail','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
		</div>
<hr>
		<div class="col-md-12 p-2 card justify-content-center text-center" >
		<div class="alert alert-light border-0 rounded-0 m-0" role="alert">Imágen secundario</div>
			<img src="{{asset( $data->images[0]['main_img'])}}" class="card-img-top preview" alt="{{old('properti', $data->properti)}}" >
			<div class="position-relative p-0">
				<input type="file" class="custom-file-input absolute-bottom" value="{{$data->images[0]['main_img']}}" name="main_img" id="main_img" >
				<label class="btn btn-primary custom-file-label absolute-bottom border-0 rounded-0" for="main_img"></label>
				{!! $errors->first('main_img','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
		</div>
	</div>
</div>
<input type="submit" class="btn btn-primary" value="{{ $btnText }}" name="enviar" />