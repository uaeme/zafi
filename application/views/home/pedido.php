<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!--<title>Login</title>-->
  <title>Pedido</title>

  <link rel="stylesheet" href="<?= base_url()?>static/dist/css/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/proy/static/dist/css/flat-ui.min.css">
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATCgCM_q1ygighDWdfD46pPasB2hSxYG0&callback=initMap" async defer></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

  <script type="text/javascript">
      function validar()
      {
        var x=new Date();
        date = document.formu.date.value;
        var fecha = date.split("/");
        //05 23 2017
        x.setFullYear(fecha[2],fecha[0]-1,fecha[1]);
        var today = new Date();
        //alert("");
        if (x >= today){
          //alert("fecha correcta");
          return true;

        }else{
          alert("La fecha debe ser mayor al dia de hoy");
          return false;
        }
      }
  </script>
</head>
<body>

    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <h2>Pedido</h2>

          <form onsubmit="return validar()" action="<?php echo base_url();?>index.php/Pedido/insertar_pedido" method="POST" name="formu" id="formu">
            <div class="form-group">
              <label for="">Seleccione producto:</label>
              <select class="material-control-login" name="producto" id="id_producto" required="">
                  <option value="" disabled="" selected="">Selecciona producto</option>
                  <option value="1">Botella de agua(500ml)</option>
                  <option value="2">Galon de agua</option>
                  <option value="3">Garrafon de agua</option>
                  <option value="4">Botella de agua(1Lt)</option>
              </select>
              <label for="">Cantidad:</label>
              <input type="number" min="1" name="cantidad" id="cantidad" value="" class="form-control" placeholder="cantidad" required="">

            </div>
            <!--<div class="form-group">
              <label for="nombre de usuario"></label>
              <input type="number" name="cantidad" id="cantidad" class="form-control" placeholder="cantidad" required="">
            </div>-->
            <div class="form-group">
              <label for="">Fecha de entrega:</label>
              <input type="text" name="date" id="datepicker" class="form-control" placeholder=" <?php echo date("m-d-Y"); ?> "  required="">
            </div>

            <div class="form-group">
              <label for="domicilio">Seleccionar del mapa</label>
              <input type="text" name="domicilio" id="domicilio" class="form-control" placeholder="domicilio de entrega" required="">
            </div>
            <!--<div class="form-group">
              <label for="domicilio"></label>
              <input type="text" id="direccion" size="60" value="" placeholder="domicilio" required="" />
            </div>  -->
            <div class="form-group">
              <label for="coordenadas"></label>
              <input style="visibility:hidden" type="text" name="coordenadas" id="coordenadas" readonly="readonly" size="30" value="" class="form-control" placeholder="coordenadas" required=""/>
            </div>
            <span id="geocoding"></span>
            <input type="submit" value="guardar" class="btn btn-primary">
          </form>




        </div>
      </div>
    </div>


    <div >

      <script type="text/javascript">
  <!-- //
        var map;
        var geocoder;
        var infoWindow;
        var marker;
        var latitud;
        var latlong;

  window.onload = function () {
    var latLng = new google.maps.LatLng(19.304373, -99.666777);
    var opciones = {
      center: latLng,
      zoom: 10,
      mapTypeId: google.maps.MapTypeId.HYBRID
    };
    var map = new google.maps.Map(document.getElementById('map_canvas'), opciones);
          geocoder = new google.maps.Geocoder();
          infowindow = new google.maps.InfoWindow();

          google.maps.event.addListener(map, 'click', function(event) {
            geocoder.geocode(
                {'latLng': event.latLng},
                function(results, status) {
                  if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                      document.getElementById('domicilio').value = results[0].formatted_address;
                      //document.getElementById('coordenadas').value = results[0].geometry.location.lat();
                      latlong= results[0].geometry.location.lat()+", "+results[0].geometry.location.lng();
                      document.getElementById('coordenadas').value= latlong;

                      if (marker) {
                        marker.setPosition(event.latLng);
                      } else {
                        marker = new google.maps.Marker({
                           position: event.latLng,
                           map: map});
                      }
                      infowindow.setContent(results[0].formatted_address+'<br/> Coordenadas: '+results[0].geometry.location);
                      infowindow.open(map, marker);
                    } else {
                      document.getElementById('geocoding').innerHTML =
                          'No se encontraron resultados';
                    }
                  } else {
                    document.getElementById('geocoding').innerHTML =
                        'Geocodificación  ha fallado debido a: ' + status;
                  }
                });
          });

  }
  // -->
  </script>
    </div>

    <div id="map_canvas" style="width: 80%; height: 300px; margin:10px auto ;"></div>

  </body>
</html>
