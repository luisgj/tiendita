<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		#map-canvas{
			 height: 1000px;
		}
	</style>
</head>
<body>
	<div id="map-canvas"></div>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places,visualization"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script>

	function getLocation(){

		{
			if (navigator.geolocation)

			{

				var options = {
					enableHighAccuracy: true,
					timeout: 5000,
					maximumAge: 0
				};

				navigator.geolocation.getCurrentPosition(success,error,options);
			}

			else

			{ x.innerHTML= "Geolocation is not supported by this browser."; }
		}

	}


	function error(e) {

		console.log("error code:" + e.code + 'message: ' + e.message );

	}

	function success(position) {
		var lat = position.coords.latitude;
		var lng = position.coords.longitude;

		var myLocation = new google.maps.LatLng(lat, lng);


		var mapOptions = {
			center: new google.maps.LatLng(myLocation.lat(), myLocation.lng()),
			zoom: 13,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};

		var map = new google.maps.Map(document.getElementById("map-canvas"),
			mapOptions);


		var marker = new google.maps.Marker({
			position: myLocation,
			map: map,
			title: "you are here"
		});

	}
	google.maps.event.addDomListener(window, 'load', getLocation());
		s
	</script>
</body>
</html>
