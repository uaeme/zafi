<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url()?>static/dist/css/vendor/bootstrap/css/bootstrap.min.css">
  	<link rel="stylesheet" href="/proy/static/dist/css/flat-ui.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <h2>Formulario</h2>
          <form action="<?php echo base_url();?>index.php/Registro/insertar_cliente" method="POST">
            <div class="form-group">
              <label for="nombre de usuario"></label>
              <input type="text" name="username" id="username" class="form-control" placeholder="username" required="">
            </div>
            <div class="form-group">
              <label for="contraseña"></label>
              <input type="password" name="password" id="password" class="form-control" placeholder="password" required="">
            </div>
            <div class="form-group">
              <label for="nombre(s)"></label>
              <input type="text" name="nombre" id="nombre" class="form-control" placeholder="nombre" required="">
            </div>
            <div class="form-group">
              <label for="apellido paterno"></label>
              <input type="text" name="paterno" id="paterno" class="form-control" placeholder="apellido paterno" required="">
            </div>
            <div class="form-group">
              <label for="apellido materno"></label>
              <input type="text" name="materno" id="materno" class="form-control" placeholder="apellido materno" required="">
            </div>
            <div class="form-group">
              <label for="telefono"></label>
              <input type="number" name="telefono" id="telefono" class="form-control" placeholder="telefono" required="">
            </div>
            <div class="form-group">
              <label for="correo "></label>
              <input type="email" name="correo" id="correo" class="form-control" placeholder="correo" required="">
            </div>
            <!--
            <div class="form-group">
              <label for="domicilio">Seleccionar del mapa </label>
              <input type="text" name="domicilio" id="domicilio" class="form-control" placeholder="domicilio" required="">
            </div>-->
            <!--<div class="form-group">
              <label for="domicilio"></label>
              <input type="text" id="direccion" size="60" value="" placeholder="domicilio" required="" />
            </div>  -->
            <!--<div class="form-group">
              <label for="coordenadas"></label>
              <input type="text" name="coordenadas" id="coordenadas" size="30" value="" class="form-control" placeholder="coordenadas" required=""/>
            </div>
            <span id="geocoding"></span> -->

            <input type="submit" value="guardar" class="btn btn-primary" >

          </form>



<!--
        </div>
      </div>
    </div>
    <div class="" style="width: auto; height: 50px; position: relative; top: -40px;">
    <center>
    <td align='center'><FORM METHOD='LINK' ACTION="<?php echo base_url()?>index.php/home"> <INPUT TYPE='submit' VALUE='Cancelar' class='btn btn-primary' > </FORM>
    </center>
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
  <!--
  </script>
    </div>

    <div id="map_canvas" style="width: 80%; height: 300px; margin:10px auto ;"></div>


-->

  </body>
</html>
