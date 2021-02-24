@extends('layouts/template')
@section('seccion')

@include('partials.validations')

<script type="text/javascript">

function initMap() {

    "use strict";
    
    if ($('.bsm_style_pink_violet').length) {
        var bsm_pin_map = '/ndgroup_backend/img/pin_icon.png';
    } else {
        var bsm_pin_map = '/ndgroup_backend/img/pin_icon.png';
    }
    var map_icon_location = {
        lat: 21.17429,
        lng: -86.84656
    };
    var map_icon_pin_icon = {
        url: bsm_pin_map,
        anchor: new google.maps.Point(0, 0),
        strokeWeight: 0,
        scaledSize: new google.maps.Size(86, 142)
    };
    var map = new google.maps.Map(document.getElementById('bsm_map_content'), {
        zoom: 13,
        center: {
        lat: 21.17429,
        lng: -86.84656
        },
        scrollwheel: false
    });
    var marker = new google.maps.Marker({
        position: map_icon_location,
        map: map,
        title: 'puntero!',
        icon: map_icon_pin_icon
    });
}

</script>

<section class="flex-column justify-content-center" >
  
  @include('partials.box')
  
  <div class="d-flex col-md-12 px-0">
    <div id="bsm_map">

      <!--  <iframe src="https://www.google.com/maps/embed?pb=!1m20!1m12!1m3!1d3720.4548742465386!2d-86.84878058506489!3d21.174081685919848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m5!3e6!4m3!3m2!1d21.17429!2d-86.84656!5e0!3m2!1ses-419!2smx!4v1614055356152!5m2!1ses-419!2smx" width="100%" height="530" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
    <div id="bsm_map_content"></div>
     
    </div>
    
  </div>
  <!-- END MAP -->
  <hr>
  <div class="row">
    <div class="col-md-12 ">
      <div class="items_list ">
        @auth
          <nav class="col-md-12 p-4 ">
            <a class="btn btn-success text-decoration-none ml-3 col-md-2" href="{{route('crear')}}" role="button"><i class="fa fa-building"></i> Agregar propiedad</a>
          </nav>
        @endauth
        @forelse( $data as $item )
        <div class="card" >
          <a href=" {{ route('details', $item->id )}}" class="text-decoration-none" >
            <div class="row no-gutters">
              @foreach($item->images as $images)
                <img src="{{asset($images->thumbnail)}}" class="card-img-top card_height" alt="{{$item->properti}}" >
              @endforeach
              <div class="card-body">
               <span class="btn btn-info mb-3 py-0"><i class="fa fa-check-circle"></i> {{$item->status}} </span>
                <h5 class="card-title text-info">{{$item->properti}}</h5>
                <p class="card-text text-dark">{{$item->city}}</p>
                @foreach($item->payments as $payments)
                <p class="card-text text-dark">${{$payments->price}} {{$payments->coin}}</p>
                @endforeach
                <p class="card-text text-dark"><small class="text-muted text-capitalize"> {{$item->created_at -> diffForHumans() }}</small> </p>
              </div>
              <div class="card-footer bg bg-info col-md-12 d-flex flex-column align-items-center m-0">
                <label class="text-white pointer">Ver detalles</label>
              </div>
            </div>
          </a>
        </div>
        @empty 
        
        <div class="card p-0 col-md-12">
          <h5 class="card-header text-light bg bg-danger">Atención</h5>
          <div class="card-body">
            <h5 class="card-title text-light bg bg-warning p-4">No existe información</h5>
            <a href="{{route('inicio')}}" class="btn btn-info">Inicio</a>
          </div>
        </div>
        
        @endforelse
      </div>
    </div>
  </div>
  <nav class="col-md-8 p-4 ">
    {{ $data ->links() }}
  </nav>
</section>
    
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqBPws5a6AripWzjun2W5klv21yJdYS_E&amp;callback=initMap"></script>
@endsection