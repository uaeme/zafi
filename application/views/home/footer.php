<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Ven a probar el agua</h3>
					<h5 class="light regular light-white">La mejor calidad en la zona</h5>
					<!--<a href="#" class="btn btn-blue ripple trial-button">Start Free Trial</a>  -->
				</div>
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Horarios <span class="open-blink"></span></h3>
					<div class="row opening-hours">
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Lunes - Viernes</h5>
							<h3 class="regular white">9:00 - 20:00</h3>
						</div>
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Sabado - Domingo</h5>
							<h3 class="regular white">10:00 - 15:00</h3>

						</div>
					</div>
				</div>
				<center>
					<h3 class="regular white">Nuestra ubicacion</h3>
				</center>
			</div>


			<div id="map" style="width: 100%; height: 300px;">

			<?php
			$_POST['varcord']= $this->session->userdata('user');
			echo "<script>";
			echo "var_javascr='".$_POST['varcord']."'";
			echo "</script>";
			?>
      <script type="text/javascript">
			//alert(var_javascr);
			var divMapa=document.getElementById('map');
			navigator.geolocation.getCurrentPosition(fn_ok, fn_mal);

			function fn_mal()
			{

			}

			function fn_ok(rta)
			{
				var lat= rta.coords.latitude;
				var lon= rta.coords.longitude;
				var uluru = {lat: 19.293485, lng: -99.653721};
				var gLatLon = new google.maps.LatLng(lat,lon);
				var objConf= {
					zoom: 17,
					center: uluru//gLatLon
				}
				var gMapa = new google.maps.Map(divMapa, objConf);

				var objConfigMarker={
						position: uluru,//gLatLon,
					//  animation: google.maps.Animation.Drop,
						map: gMapa,
						draggable:true,
						title: "Ustede esta aca"
				}
				var gMarker = new google.maps.Marker(objConfigMarker);


				var gCoder = new google.maps.Geocoder();
				if (var_javascr) {
					var objInformacion={
					//<!--  address: 'Maestría y Doctorado en Ciencias de la Ingeniería Universidad Autónoma del Estado de México (UAEMEX) Facultad de Ingeniería, Facultad de Ingeniería Cerro de Coatepec, Paseo Universidad s/n, Universitaria, 50130 Toluca de Lerdo, Méx.'
						//address: "' "+  +" '"
						address: gLatLon
					}
				}//else {
					//var objInformacion={
					//<!--  address: 'Maestría y Doctorado en Ciencias de la Ingeniería Universidad Autónoma del Estado de México (UAEMEX) Facultad de Ingeniería, Facultad de Ingeniería Cerro de Coatepec, Paseo Universidad s/n, Universitaria, 50130 Toluca de Lerdo, Méx.'
						//address: "' "+  +" '"
						//address: //gLatLon
					//}
				//}

			//  gCoder.geocode(objInformacion, fn_coder);
				function fn_coder()
				{
					var coordenadas=datos[0].geometry.location;
					var config = {
						map: gMapa,
						animation: google.maps.Animation.DROP,
						position:coordenadas,
						title: 'UAEM'
					}


				}

				var objConfigDR={
					map: gMapa

				}

				var objConfigDS={
					origin: uluru,//gLatLon,
					destination: objInformacion.address,
					travelMode: google.maps.TravelMode.DRIVING
				}

				var ds = new google.maps.DirectionsService();

				var dr = new google.maps.DirectionsRenderer(objConfigDR);

				ds.route(objConfigDS , fnRutear)

				function fnRutear(resultados, status)
				{
						if(status == 'OK')
						{
							dr.setDirections(resultados);
						}else {
							alert(error+status);
						}

				}


			}
      </script>
      </div>

			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p>&copy; 2017 Derechos Reservados. </a></p>
				</div>
				<div class="col-sm-4 text-right text-center-mobile">
					<ul class="social-footer">
						<li><a href="https://www.facebook.com/Zafiro-340595166306044/?fref=ts"><i class="fa fa-facebook"></i></a></li>
						<li><a href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>



</body>

</html>
