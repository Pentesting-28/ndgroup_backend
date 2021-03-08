@extends('layouts/template')
@section('seccion')

@include('partials.validations')

<section class="flex-column justify-content-center" >
  
  @include('partials.box')
  
  <div class="d-flex col-md-12 px-0">
    <div id="bsm_map">

      <div id="bsm_map_content"></div>{{-- map --}}
     
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
<script>
function initMap() {

    if ($('.bsm_style_pink_violet').length) {
        var bsm_pin_map = "{{asset('/img/pin_icon.png')}}";
    } else {
        var bsm_pin_map = "{{asset('/img/pin_icon.png')}}";
    }
    var locations = <?php echo json_encode($data);?>;
    let locationsInfo = []
    locations.data.forEach(location => {
        location.coordinates.forEach(coordinates => {
            let locationData = {
                position:{
                    lat:coordinates.latitude,
                    lng:coordinates.length
                }              
            }
            locationsInfo.push(locationData)
        })
    })
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition((data)=>{
            let currentPosition = {
                lat: data.coords.latitude,
                lng: data.coords.longitude
            }
            dibujarMapa(currentPosition, locationsInfo)
        })
    }
    const dibujarMapa = (obj, locationsInfo) => {
        var map_icon_pin_icon = {
            url: bsm_pin_map,
            scaledSize: new google.maps.Size(30, 60)
        };
        let map = new google.maps.Map(document.getElementById('bsm_map_content'),{
            zoom: 8,
            center: obj
        })
        
        let marker = new google.maps.Marker({// Mi ubicacion 
            position: obj,
            title: 'Ubicado en ' + locations.data[0].city,
            icon: map_icon_pin_icon
        })

        marker.setMap(map);
        let markers = locationsInfo.map(place => {
            return new google.maps.Marker({
                position: place.position,
                map: map,
                title: locations.data[0].properti,
                icon: map_icon_pin_icon
            })
        })
    }
}
</script>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqBPws5a6AripWzjun2W5klv21yJdYS_E&amp;callback=initMap"></script>
@endsection