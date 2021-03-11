@auth
	@if(Session::has('create'))
	  <script type="text/javascript">
	    toastr["success"]("{{ Session::get('create') }}");
	  </script>
	@endif
	@if(Session::has('delete'))
	  <script type="text/javascript">
	    toastr["error"]("{{ Session::get('delete') }}");
	  </script>
	@endif
	@if(Session::has('update'))
	  <script type="text/javascript">
	    toastr["success"]("{{ Session::get('update') }}");
	  </script>
	@endif
@endauth

@if(Session::has('email'))
	<div class="modal fade" id="message_email" tabindex="-1" role="dialog" aria-labelledby="messageM" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content alert alert-success" role="alert" >
				<div class="modal-header">
					<h5 class="modal-title" id="messageM">{{Session::get('email')}}</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p class="lead my-2">En minutos uno de nuestros representantes se contactará contigo a la brevedad posible.</p>
					<p class="lead my-2"><b>¡Gracias por su confianza!</b></p>
					<div class="row">
						<h5 class="widget-title  mt-2 ml-3">Información de contacto</h5>
						<ul class="list-group pl-3 list-group-flush col-md-12">
							<li class="list-group-item row social_m" >
								<a class="btn btn-light btn_fb" target="_blank" href="https://www.facebook.com/nrealestate38"><i class="fa fa-facebook"></i></a>
								<a class="btn btn-light btn_insta" target="_blank" href="https://www.instagram.com/nd.realestatecun/"><i class="fa fa-instagram"></i></a>
								<a class="btn btn-light btn_whatsp" target="_blank" href="https://api.whatsapp.com/send?phone=5219982425617&text=Hola,%20información%20del%20inmueble."><i class="fa fa-whatsapp"></i></a>
								<a class="btn btn-light btn_mail" href="mailto:direccion@ndgroup.mx"><i class="fa fa-envelope"></i></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
@endif

