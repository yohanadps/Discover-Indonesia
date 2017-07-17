var markers = [
	['<a href="event_festival_bintan.php" style="text-decoration: none;">Bintan Triathlon</a><br><img src="../img/festival_bintan.jpg" width="30%" height="20%">', 1.155173, 104.425129],
	['<a href="event_festival_isen.php" style="text-decoration: none;">Festival Budaya Isen Mulang</a><br><img src="../img/festival_isen.jpg" width="30%" height="20%">', -2.209476, 113.916627],
	['<a href="event_festival_jailolo.php" style="text-decoration: none;">Festival Teluk Jailolo</a><br><img src="../img/festival_jailolo.jpg" width="30%" height="20%">', 1.159956, 127.454216],
	['<a href="event_festival_jfff.php" style="text-decoration: none;">Jakarta Fashion and Food Festival (JFFF)</a><br><img src="../img/festival_jfff.jpg" width="30%" height="20%">', -6.157142, 106.908507],
	['<a href="event_festival_layang.php" style="text-decoration: none;">Bali Kite Festival</a><br><img src="../img/festival_layang.jpg" width="30%" height="20%">', -8.656984, 115.260544],
	['<a href="event_festival_pagaruyung.php" style="text-decoration: none;">Menikmati Ragam Atraksi Budaya Melayu di Minangkabau</a><br><img src="../img/festival_pagaruyung.jpg" width="30%" height="20%">', -0.460549, 100.584167],
	['<a href="event_festival_pasola.php" style="text-decoration: none;">Festival Pasola di Sumba, Nusa Tenggara Timur</a><br><img src="../img/festival_pasola.jpg" width="30%" height="20%">', -9.694266, 119.973709]
];

function initializeMaps() {
	var myOptions = {
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		mapTypeControl: false
	};
	var map = new google.maps.Map(document.getElementById("googleMap"),myOptions);
	var infowindow = new google.maps.InfoWindow(); 
	var marker, i;
	var bounds = new google.maps.LatLngBounds();

	for (i = 0; i < markers.length; i++) { 
		var pos = new google.maps.LatLng(markers[i][1], markers[i][2]);
		bounds.extend(pos);
		marker = new google.maps.Marker({
			position: pos,
			animation:google.maps.Animation.BOUNCE,
			map: map
		});
		google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() {
				infowindow.setContent(markers[i][0]);
				infowindow.open(map, marker);
			}
		})(marker, i));
	}
	map.fitBounds(bounds);
}

google.maps.event.addDomListener(window, 'load', initializeMaps);