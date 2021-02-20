@extends('layouts/template')
@section('seccion')
<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="{{ asset('/img/slider1.jpg')}}" class="d-block" alt="slider 1">
		</div>
		<div class="carousel-item">
			<img src="{{ asset('/img/slider2.jpg')}}" class="d-block" alt="slider 2">
		</div>
		<div class="carousel-item">
			<img src="{{ asset('/img/slider3.jpg')}}" class="d-block" alt="slider 3">
		</div>
		<div class="carousel-item">
			<img src="{{ asset('/img/slider4.jpg')}}" class="d-block" alt="slider 4">
		</div>
		<div class="carousel-item">
			<img src="{{ asset('/img/slider5.jpg')}}" class="d-block" alt="slider 5">
		</div>
		<div class="carousel-item">
			<img src="{{ asset('/img/slider6.jpg')}}" class="d-block" alt="slider 6">
		</div>
		<div class="carousel-item">
			<img src="{{ asset('/img/slider7.jpg')}}" class="d-block" alt="slider 7">
		</div>
		<div class="carousel-item">
			<img src="{{ asset('/img/slider8.jpg')}}" class="d-block" alt="slider 8">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<section class="col-xl-12 my-5" >
	<div class="row justify-content-center" >
		<div class="col-md-3"><span class="row justify-content-center item_t timer_l" ></span><span class="row justify-content-center txt_item" >LISTADOS ACTIVOS</span></div>
		<div class="col-md-3"><span class="row justify-content-center item_t timer_v" ></span><span class="row justify-content-center txt_item" >MILLONES EN VENTAS</span></div>
		<div class="col-md-3"><span class="row justify-content-center item_t timer_c" ></span><span class="row justify-content-center txt_item">CLIENTES SATISFECHOS</span></div>
	</div>
</section>
<hr>
<section class="col-xl-12 my-5" >
	<div class="row justify-content-center ">
		<div class="col-md-6 mb-4">
			<a class="row" target="_blank" href="https://api.whatsapp.com/send?phone=5219982425617&text=Hola,%20información%20del%20inmueble.">
				<img src="{{ asset('/img/home/home1.jpg')}}" class="rounded mw-100 shdn " alt="Club 0" />
			</a>
		</div>
		<div class="col-md-4 col-12 mx-4">
			<a class="row" target="_blank" href="https://api.whatsapp.com/send?phone=5219982425617&text=Hola,%20información%20del%20inmueble.">
				<img src="{{ asset('/img/country/club1.jpg')}}" class="mw-100 shdn" alt="Club 1" />
			</a>
			<a class="row mt-4" target="_blank" href="https://api.whatsapp.com/send?phone=5219982425617&text=Hola,%20información%20del%20inmueble..">
				<img src="{{ asset('/img/country/club2.jpg')}}" class="mw-100 shdn" alt="Club 2" />
			</a>
		</div>
	</div>
</section>
<section class="col-xl-12 justify-content-center px-0"  >
	
	<div class="col-md-12 col-12 row mx-0 justify-content-center d-flex">
		<div class="col-md-3 col-12 mb-4 px-0 " >
			<span class="row txt_inf" >DESARROLLO DESTACADO</span>
			<span class="row txt_adora my-4" >ndgroup<br>Cancún</span>
			<div class="row">
				<a target="_blank" href="https://api.whatsapp.com/send?phone=5219982425617&text=Hola,%20información%20del%20inmueble." class="btn  btn-info" >M&aacute;s informaci&oacute;n</a>
			</div>
		</div>
		<div class="col-md-3 col-12 txt_img_bt">
			<img src="{{ asset('/img/dpto_puerto/puerto_c1.jpg')}}" class="mw-100" alt="" />
			<p class="lead my-4"><b>Puerto cancún</b> es un complejo residencial que contempla todos los aspectos de funcionalidad, espacio y lujo posibles haciendo de este desarrollo un ejemplo decalidad.</p>
			<p  class="lead m-0" >Esta propiedad ademas de estar por debajo de el precio de mercado tiene acceso a todas las amenidades of recidas por el desarrollo <b>Puerto Cancún</b>.</p>			
		</div>
		<div class="col-md-3 col-12 txt_img_bt ">
			<p class="lead m-0">La ubicación del desarrollo de <b>Puerto Cancún</b> es excepcional pues se encuentra cerca de la espléndida zona hotelera y del centro de la ciudad, haciéndolo una base residencial ideal para vivir o visitar.</p>
			<p class="lead my-4" > Los interesados en rentar un departamento en <b>Puerto cancún</b>, preocupados por la seguridad, estarán contentos de saber que la comunidad mantiene una entrada cercada con seguridad para proporcionar a los propietarios paz mental adicional.</p>
			<img src="{{ asset('/img/dpto_puerto/puerto_c2.jpg')}}" class="mw-100" alt="" />
		</div>
	</div>
</section>
<hr>
<section class="col-xl-12 row my-5 justify-content-center customer"  >
	
	<div class="row col-xl-10 justify-content-center">
		<h2 class="p-3 txt_t">Testimonios de nuestros Clientes</h2>
		<div class="row col-xl-12 justify-content-left">
			<div class="media my-4 col-md-6">
				<div class="media-body">
					<p class="text-justify mt-4" >Excelente servicio eficacia absoluta en 3 días rentaron mi casa! Disponibles a toda hora súper recomendables! Mil gracias</p>
					<h5 class="row m-0 justify-content-center">Jonás Santiz</h5>
					<h6 class="row justify-content-center">Cliente</h6>
				</div>
			</div>
			<div class="media my-4 col-md-6">
				<div class="media-body">
					<p class="text-justify mt-4">Muy recomendado! Atención personalizada al 100%. Muy amables con su atención y con mucha formalidad. Gracias a todos en NDGROUP Cancún, en especial a Veny.</p>
					<h5 class="row m-0 justify-content-center">Fernando Jimenez</h5>
					<h6 class="row justify-content-center">Cliente</h6>
				</div>
			</div>
			<div class="media my-4 col-md-6">
				<div class="media-body">
					<p class="text-justify mt-4">Equipo muy profesional de principio a fin. Siguiendo todos los pasos como se debe para una renta segura. Mencion especial a Veny por su gran profesionalidad.</p>
					<h5 class="row m-0 justify-content-center">Francisco Aquino</h5>
					<h6 class="row justify-content-center">Cliente</h6>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection