var myCenter=new google.maps.LatLng(-8.057882, 114.242441);

function initialize()
{

var mapProp = {
  center:myCenter,
  zoom:9,
  mapTypeId:google.maps.MapTypeId.ROADMAP
};

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  animation:google.maps.Animation.BOUNCE
});

marker.setMap(map);

}
 
google.maps.event.addDomListener(window, 'load', initialize);