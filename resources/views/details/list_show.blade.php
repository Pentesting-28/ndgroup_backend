@extends('layouts/template')
@section('seccion')

@include('partials.validations')
<section class="flex-column justify-content-center" >  
  @include('partials.box')  
  <div class="d-flex col-md-12 px-0">
    <div id="bsm_map">
      <div id="bsm_map_content"></div>     
    </div>    
  </div>
  <!-- END MAP -->
  <hr>
  <div class="container-fluid items">
      <div class="items_list ">
        @auth
          <nav class="col-md-12 p-4 ">
            <a class="btn btn-dark text-decoration-none ml-3 col-md-2 add" href="{{route('crear')}}" role="button"><i class="fa fa-building"></i> Agregar propiedad</a>
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
               <span class="btn btn-dark mb-3 py-0"><i class="fa fa-check-circle"></i> {{$item->status}} </span>
                <h5 class="card-title text-dark">{{$item->properti}}</h5>
                <p class="card-text text-dark">{{$item->city}}</p>
                @foreach($item->payments as $payments)
                <p class="card-text text-dark">${{$payments->price}} {{$payments->coin}}</p>
                @endforeach
                <p class="card-text text-dark"><small class="text-muted text-capitalize"> {{$item->created_at -> diffForHumans() }}</small> </p>
              </div>
              <div class="card-footer bg bg-dark col-md-12 d-flex flex-column align-items-center m-0">
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
  <nav class="col-md-8 p-4 ">
    {{ $data->links("pagination::bootstrap-4") }}
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
      let propertyInfo = [];
     
      locations.data.forEach(location => {
          location.coordinates.forEach(coordinates => {
              let data = {
                  title:location.properti,
                  position:{
                      lat:parseFloat(coordinates.latitude),
                      lng:parseFloat(coordinates.length)
                  }              
              }
              propertyInfo.push(data);
          })
      })
      if(navigator.geolocation){
          navigator.geolocation.getCurrentPosition((data)=>{//Se debe cumplir la promesa
              let currentPosition = {
                  lat: Number(propertyInfo[0].position.lat),
                  lng: Number(propertyInfo[0].position.lng)
              }
              dibujarMapa(currentPosition,propertyInfo);//currentPosition, 
          })
      }

      const dibujarMapa = (obj,propertyInfo) => {//obj,
          var map_icon_pin_icon = {
              url: bsm_pin_map,
              scaledSize: new google.maps.Size(30, 60)
          };
          let map = new google.maps.Map(document.getElementById('bsm_map_content'),{
              zoom:9,
              center: obj
          })
          let marker = new google.maps.Marker({// Mi ubicacion 
              position: obj,
              title: propertyInfo[0].title, //'Ubicado en ' + locations.data[0].city,
              icon: map_icon_pin_icon
          })

          marker.setMap(map);

          let n = propertyInfo.length;

          for(let k = 1; k < n; k++){
            new google.maps.Marker({
                position: propertyInfo[k].position,
                map: map,
                title: propertyInfo[k].title,//locations.data[0].properti,
                icon: map_icon_pin_icon
            });
          }
          // let markers = propertyInfo.map(property => {
          //     return new google.maps.Marker({
          //         position: property.position,
          //         map: map,
          //         title: property.title,//locations.data[0].properti,
          //         icon: map_icon_pin_icon
          //     })
          // })
      }
  }
</script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqBPws5a6AripWzjun2W5klv21yJdYS_E&amp;callback=initMap"></script>
@endsection