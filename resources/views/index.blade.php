<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css">
		{{ Html::style('admin/semantic/semantic.min.css') }}
	</head>
	
	<style>
		.container{
			padding-top: 100px;
		}
	</style>
	<body>

	<div class="container">
		<input class="input" type="text"> 
		<button class="button is-info" id="buscar"> Buscar </button>
		
		<input type="text" class="input" id="latitude">
		<input type="text" class="input" id="longitude">
		<div id="gmaps" style="width:100%;height:400px"></div>
	</div>

	</body>
	{{ Html::script('admin/jquery/jquery-3.1.1.min.js') }}
	{!! Html::script('admin/semantic/semantic.js') !!}

	{{-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> --}}
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmRClazcHLLEQMucZgYcPXi6wnW7mWNpY"></script>
	<script>
		

		$("#buscar").on('click', function(e) {

			var geocoder = new google.maps.Geocoder();
		    var address = $('.input').val();
			geocoder.geocode( { 'address': address}, function(results, status) {

			if (status == google.maps.GeocoderStatus.OK) {
					var latitude = results[0].geometry.location.lat();
					var longitude = results[0].geometry.location.lng();
					alert(latitude);
				} 

				myMap(latitude, longitude);

				$("#latitude").val(latitude);
				$("#longitude").val(longitude)
			});
		})
		
		function myMap(latitude , longitude) {
			var myCenter  = new google.maps.LatLng(latitude,longitude);
			var mapCanvas = document.getElementById("gmaps");
			var mapOptions = {
				center: myCenter,
				zoom: 15
			};
			var marker = new google.maps.Marker({position: myCenter});
			var map = new google.maps.Map(mapCanvas, mapOptions);
			marker.setMap(map);
		}

		google.maps.event.addDomListener(window, 'load', myMap);
	</script>
	

	

</html>