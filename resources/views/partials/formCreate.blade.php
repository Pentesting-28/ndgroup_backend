<div class="row">
	<div class="col-md-10 p-0 d-flex align-items-start">
		<div class="form-group col-md-6 p-0">
			<div class="col-md-12 mb-3">
				<input type="text" class="form-control" id="properti" name="properti" value="{{old('properti')}}" placeholder="Propiedad" autocomplete="off" required>
				{!! $errors->first('properti','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
			<div class="col-md-12 mb-3">
				<select name="city" class="form-control">
					<option value="Cancún">Cancún</option>
					<option value="Playa del carmen">Playa del carmen</option>
					<option value="Puerto morelos">Puerto morelos</option>
					<option value="Tulum">Tulum</option>
				</select>
			</div>
			<div class="col-md-12 mb-3">
				<input type="text" class="form-control" name="residency" value="{{old('residency')}}" placeholder="Residencial" autocomplete="off" >
				{!! $errors->first('residency','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
			<div class="col-md-12 mb-3">

				<input type="text" class="form-control" value="{{ old('price') }}" name="price" placeholder="Precio" autocomplete="off" required>
				{!! $errors->first('price','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
			<div class="col-md-12 mb-3">
				<select name="coin" class="form-control" required>
					<option value="us">us</option>
					<option value="mx">mx</option>
				</select>
			</div>
			<div class="col-md-12 mb-3">
				<input type="text" class="form-control" value="{{old('adress')}}" name="adress" placeholder="Dirección" autocomplete="off" >
				{!! $errors->first('adress','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
			<div class="col-md-12 mb-3">
				<textarea type="text" class="form-control" name="features" placeholder="Características" >{{old('features')}}</textarea>
				{!! $errors->first('features','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
			<div class="col-md-12 mb-3">
				<textarea type="text" class="form-control" name="amenities" placeholder="Amenidades" >{{old('amenities')}}</textarea>
				{!! $errors->first('amenities','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
			<div class="col-md-12 mb-3">
				<textarea type="text" class="form-control" name="specialf" placeholder="Instalaciones especiales" >{{old('specialf')}}</textarea>
				{!! $errors->first('specialf','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
			<div class="col-md-12 mb-3">
				<textarea type="text" class="form-control" name="information" placeholder="Información" >{{old('information')}}</textarea>
				{!! $errors->first('information','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
		</div>
		<div class="form-group col-md-6 p-0">
			<div class="col-md-12 mb-3">
				<select name="rooms" class="form-control">
					<option value="0">Habitaciones</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>
			
			<div class="col-md-12 mb-3">
				<select name="bathrooms" class="form-control">
					<option value="0">Baños</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>
			<div class="col-md-12 mb-3">
				<select name="status" class="form-control" >
					<option value="Destacado">Destacado</option>
					<option value="En Renta">En renta</option>
					<option value="En Venta">En venta</option>
					<option value="Predio">Predio</option>
					<option value="Propiedad">Propiedad</option>
				</select>
			</div>
			<div class="col-md-12 mb-3">
				<input type="text" class="form-control" value="{{old('size')}}" name="size" placeholder="Medidas" autocomplete="off">
				{!! $errors->first('size','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
			
			<div class="col-md-12 mb-3">
				<a data-toggle="modal" data-target="#mapviews" href="#">Agregar ubicación{{--<img class="map_pin" src="{{ asset('/img/map1.jpg')}}" alt="Ubicación de la propiedad" >--}}</a>
				@include('partials.mapCreate')
			</div>

			<div class="col-md-12 mb-3">
				<textarea type="text" class="form-control" value="{{old('details')}}" name="details" placeholder="Detalles" ></textarea>
				{!! $errors->first('details','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>	
			<div class="col-md-12 mb-3">
				<input type="text" class="form-control" value="{{old('url')}}" name="url" placeholder="URL" id="url" autocomplete="off" required>
				{!! $errors->first('url','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
			<div class="col-md-12 mb-3">
				<input type="email" class="form-control" value="{{old('email')}}" name="email" placeholder="Correo" autocomplete="off" required>
				{!! $errors->first('email','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
			<div class="col-md-12 mb-3">
				<input type="text" maxlength="10" class="form-control phone" value="{{old('phone')}}" name="phone" id="phone" placeholder="Telefono" autocomplete="off" required>
				{!! $errors->first('phone','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
		</div>
	</div>

	<div class="col-md-2 p-0" >		
		<div class="col-md-12 p-2 card justify-content-center text-center" >
		<div class="alert alert-light border-0 rounded-0 m-0" role="alert">Imágen principal</div>
			<img src="{{asset( old('thumbnail'))}}" class="card-img-top preview" alt="{{old('properti')}}" >
			<div class="position-relative p-0">
				<input type="file" class="custom-file-input absolute-bottom" value="{{asset( old('thumbnail'))}}" name="thumbnail" id="thumbnail" required>
				<label class="btn btn-dark custom-file-label absolute-bottom border-0 rounded-0" for="thumbnail"></label>
				{!! $errors->first('thumbnail','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
		</div>
<hr>
		<div class="col-md-12 p-2 card justify-content-center text-center" >
		<div class="alert alert-light border-0 rounded-0 m-0" role="alert">Imágen secundario</div>
			<img src="{{asset( old('main_img'))}}" class="card-img-top preview" alt="{{old('properti')}}" >
			<div class="position-relative p-0">
				<input type="file" class="custom-file-input absolute-bottom" value="{{asset( old('main_img'))}}" name="main_img" id="main_img" required>
				<label class="btn btn-dark custom-file-label absolute-bottom border-0 rounded-0" for="main_img"></label>
				{!! $errors->first('main_img','<div class="alert alert-danger p-1 m-0 rounded-0" role="alert" >:message</div>') !!}
			</div>
		</div>
	</div>
</div>
<input type="submit" class="btn btn-dark" value="{{ $btnText }}" name="enviar" />