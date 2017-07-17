var markers = [
    ['<a href="place_besakih.php" style="text-decoration: none;">Pura Besakih</a><br><img src="../img/place_besakih.jpg" width="30%" height="20%">',-8.359089, 115.458877],
    ['<a href="place_borobudur.php" style="text-decoration: none;">Candi Borobudur</a><br><img src="../img/place_borobudur.jpg" width="30%" height="20%">',-7.608029, 110.203587],
    ['<a href="place_borobudur.php" style="text-decoration: none;">Taman Laut Bunaken</a><br><img src="../img/place_bunaken.jpg" width="30%" height="20%">',1.699427, 124.755877],
    ['<a href="place_gili_trawangan.php" style="text-decoration: none;">Gili Trawangan</a><br><img src="../img/place_gilitrawangan.jpg" width="30%" height="20%">',-8.347019, 116.038309],
    ['<a href="place_gunung_rinjani.php" style="text-decoration: none;">Gunung Rinjani</a><br><img src="../img/place_gunung_rinjani.jpg" width="30%" height="20%">',-8.395971, 116.455976],
    ['<a href="place_ijen.php" style="text-decoration: none;">Kawah Ijen</a><br><img src="../img/place_ijen.jpg" width="30%" height="20%">',-8.057882, 114.242441],
    ['<a href="place_kep_seribu.php" style="text-decoration: none;">Taman Nasional Laut Kepulauan Seribu</a><br><img src="../img/place_kepri.jpg" width="30%" height="20%">',-5.796029, 106.494324],
    ['<a href="places_malioboro.php" style="text-decoration: none;">Malioboro</a><br><img src="../img/place_malioboro.jpg" width="30%" height="20%">',-7.793240, 110.365672],
    ['<a href="places_monas.php" style="text-decoration: none;">Nama_place</a><br><img src="../img/place_malioboro.jpg" width="30%" height="20%">',-6.175184, 106.827164],
    ['<a href="places_ubud.php" style="text-decoration: none;">Tugu Monas</a><br><img src="../img/place_monas.jpg" width="30%" height="20%">',-8.507087, 115.259345],
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