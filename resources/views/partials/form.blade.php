{{--Validacion--}}
@include('partials.validations')
<section class="col-xl-12 row my-5 mx-0 px-0 justify-content-center" id="wrapper" >
	<div class="row col-xl-10 px-0 justify-content-center">		
		<div class="row col-xl-12 px-0 evenly">
			<div class="col-md-5 px-0 ">
				<div class="row d-flex justify-content-center" >
					<a href="/">
						<img src="https://ndgroup.mx/img/logo.jpg" class="logo card-img" alt="Logo" >
					</a>					
					<ul class="list-group list-group-flush title_item_b ">
						<li class="list-group-item mb-0 "><i class="fa fa-building mr-2"></i> Cancún, Quintana Roo 77503
						México</li>
						<li class="list-group-item mb-0"><a href="tel:5219982425617"><i class="fa fa-phone  mr-2"></i> 998 242 5617</a></li>
						<li class="list-group-item mb-0"><a href="mailto:direccion@ndgroup.mx"><i class="fa fa-envelope  mr-2"></i> direccion@ndgroup.mx</a></li>
					</ul>
					<ul class="list-group list-group-flush justify-content-right col-md-6">
						<li class="list-group-item btn_1" >
							<a class="btn btn-light" target="_blank" href="https://www.facebook.com/nrealestate38"><i class="fa fa-facebook"></i></a>
							<a class="btn btn-light" target="_blank" href="https://www.instagram.com/nd.realestatecun/"><i class="fa fa-instagram"></i></a>
							<a class="btn btn-light" target="_blank" href="https://api.whatsapp.com/send?phone=5219982425617&text=Hola,%20información%20del%20inmueble."><i class="fa fa-whatsapp"></i></a>
							<a class="btn btn-light" href="mailto:direccion@ndgroup.mx"><i class="fa fa-envelope"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 mb-4">
				<div class="row">
					<h5 class="widget-title ">CONTACTO</h5>
					<form action="{{route('sendMailContact')}}" method="POST" class="needs-validation" novalidate >
						@csrf   {{-- es un metodo de seguridad de laravel, se debe de incluir en todos los formularios --}}
						<!-- Grid row -->
						<div class="row form_c form-row">
							<!-- Grid column -->
							<div class="col-md-12 mb-4">
								<label for="form-contact-message">Nombre</label>
								<input type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="off" >
								<div class="invalid-feedback"> Nombre invalido </div>
								{!! $errors->first('name','<div class="invalid-feedback" role="alert" >:message</div>') !!}
							</div>
							<!-- Grid column -->
							<div class="col-md-12 mb-4">
								<label for="form-contact-message">Correo</label>
								<input type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="off" >
								<div class="invalid-feedback"> Correo invalido </div>
								{!! $errors->first('email','<div class="invalid-feedback" role="alert" >:message</div>') !!}
							</div>
							<!-- Grid column -->
							<div class="col-md-12 mb-4">
								<label for="form-contact-message">Télefono</label>
								<input type="text" class="form-control phone" name="phone" maxlength="10" value="{{ old('phone') }}" required autocomplete="off" >
								<div class="invalid-feedback"> Telefono invalido </div>
								{!! $errors->first('phone','<div class="invalid-feedback" role="alert" >:message</div>') !!}
							</div>
							<!-- Grid column -->
							<div class="col-md-12 mb-4">
								<label for="form-contact-message">Mensaje</label>
								<textarea id="content" name="content" >{{ old('content') }}</textarea>
								<div id="score"><div> 0 / 180 </div></div>
							</div>
							<!-- Grid column -->
							<div class="col-md-12 ">
								<input type="submit" class="btn btn-success" value="Enviar" />
							</div>
						</div>
					</form>
					<!-- Form -->
				</div>
			</div>
			<div class="col-md-3 ">
				<div class="row">
					<h5 class="widget-title">Nuestras Redes</h5>
					<ul class="list-group list-group-flush col-md-12">
						<li class="list-group-item row social_m" >
							<a class="btn btn-light btn_fb" target="_blank" href="https://www.facebook.com/nrealestate38"><i class="fa fa-facebook"></i></a>
							<a class="btn btn-light btn_insta" target="_blank" href="https://www.instagram.com/nd.realestatecun/"><i class="fa fa-instagram"></i></a>
							<a class="btn btn-light btn_whatsp" target="_blank" href="https://api.whatsapp.com/send?phone=5219982425617&text=Hola,%20información%20del%20inmueble."><i class="fa fa-whatsapp"></i></a>
							<a class="btn btn-light btn_mail" href="mailto:direccion@ndgroup.mx"><i class="fa fa-envelope"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>