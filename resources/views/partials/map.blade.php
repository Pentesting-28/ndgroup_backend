
<div class="modal fade" id="mapviews" tabindex="-1" role="dialog" aria-labelledby="mapviews" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="alert alert-dark text-center mb-0 col-md-12" role="alert" >Ubicación de la propiedad <i class="fa fa-map"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div style="height:400px; width:100%;" id="map"></div>
                <div class="row py-2">
                  <div class="col-md-6 py-2 px-0">
                    <label class="latitude" ><b>Latitude:</b> {{$data->coordinates[0]['latitude']}}</label>
                    <input type="hidden" value="{{$data->coordinates[0]['latitude']}}" name="latitude" >
                  </div>
                  <div class="col-md-6 py-2 px-0">
                    <label class="length" ><b>Longitud:</b> {{$data->coordinates[0]['length']}} </label>
                    <input type="hidden" value="{{$data->coordinates[0]['length']}}" name="length" >
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="border border-dark btn btn-default" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

  function initMap() {

    let data = <?php echo json_encode($data); ?>;
    let lat  = data.coordinates[0]['latitude'];
    let lng  = data.coordinates[0]['length'];

    let zoom = 13;
    // lat = 20.973276, lng = -89.624175, zoom = 12
    lat  = typeof lat  === 'undefined' ? 21.17429  : lat;
    lng  = typeof lng  === 'undefined' ? -86.84656 : lng
    zoom = typeof zoom === 'undefined' ? 13        : zoom;

    var map = new google.maps.Map(document.getElementById("map"), {
      zoom: zoom,
      center: {
        lat: parseFloat(lat),
        lng: parseFloat(lng)
      }
    });
    var bsm_pin_map = "{{asset('/img/pin_icon.png')}}";
    var map_icon_pin_icon = {
        url: bsm_pin_map,
        scaledSize: new google.maps.Size(30, 60)
    };

    marker = new google.maps.Marker({
      map: map,
      draggable: true,
      animation: google.maps.Animation.DROP,
      position: {
        lat: Number(lat),
        lng: Number(lng)
      },
      icon: map_icon_pin_icon
    });
    
    // Agregamos el listener para capturar el click y movimiento del marcador
    marker.addListener("click", function() {
      if (marker.getAnimation() !== null) {
        marker.setAnimation(null);
      } else {
        marker.setAnimation(google.maps.Animation.BOUNCE);
      }
    });
    
    // Capturamos cuando la posición del marcador cambie y realizamos la acción que se requiera
    google.maps.event.addListener(marker, "position_changed", function() {

      var lat = marker.getPosition().lat();
      var lng = marker.getPosition().lng();
      let latitude = $(".latitude");
      let length = $(".length");

        $('input[name="latitude"]').val(lat);
        $('input[name="length"]').val(lng);

        latitude.html(`<b>Latitude:  </b>  ${lat}`);
        length.html(`<b>Longitud:  </b>  ${lng}`);
     });
  }

</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqBPws5a6AripWzjun2W5klv21yJdYS_E&amp;callback=initMap"></script>