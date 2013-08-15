var _round = Math.round;
var geocoder;
var map;
var marker;
Math.round = function(number, decimals){
  if (arguments.length == 1) return _round(number);
  var multiplier = Math.pow(10, decimals);
  return _round(number * multiplier) / multiplier;
}

function initialize_add() {
	geocoder = new google.maps.Geocoder();
	var latlng = new google.maps.LatLng(-34.397, 150.644);
	var mapOptions = {
			zoom: 11,
			center: latlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
	}

	marker = new google.maps.Marker({
		position: latlng,
		map: map,
		icon: "http://www.google.com/intl/en_us/mapfiles/ms/micons/blue-dot.png"
	});             
	map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
	google.maps.event.addListener(map, 'click', function(evnt) {
			$('#geo').val(Math.round(evnt.latLng.lat(), 6) + ',' + Math.round(evnt.latLng.lng(), 6));
			marker.setMap(map);
			marker.setPosition(evnt.latLng);
	});
	centerMap('Рязань');
}
	
function centerMap(address) {
	geocoder.geocode( { 'address': address}, function(results, status) {
	  if (status == google.maps.GeocoderStatus.OK) {
		map.setCenter(results[0].geometry.location);
	  } else {
		console.log('Geocode was not successful for the following reason: ' + status);
	  }
	});
}
