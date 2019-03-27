var markers = new Array();
var map;

var locations = [
  ["<b>D'Pizza,Prabhadevi</b><br>Shop No. 3-4,<br>Kohinoor Building,<br>Prabhadevi",19.0166617,72.8292212],
  ["<b>D'Pizza, Bandra West</b><br>Shop No. 1, Mangal Bhavan,<br>14th Road, Khar,<br>Bandra West",19.0678699,72.83258619999992],
  ["<b>D'Pizza, Andheri East</b><br>124, Kapadia Industrial Estate,<br>Chakala, MIDC,<br>Andheri East", 19.1138199,72.86323649999997],
  ["<b>D'Pizza, Juhu</b><br>406, S.V.Road,<br>Next to Pawan hans<br>Vile Parle West", 19.108659199999998,72.90306559999999],
];


function initialize() {
  map = new google.maps.Map(document.getElementById('map_canvas'), {
    zoom: 15,
    center: new google.maps.LatLng(19.1138199,72.86323649999997),
    zoomControlOptions: {
      position: google.maps.ControlPosition.LEFT_BOTTOM
    }
  });


  var infowindow = new google.maps.InfoWindow({
    maxWidth: 160
  });
  for (var i = 0; i < locations.length; i++) {
    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[i][1], locations[i][2]),
      map: map,
      title: 'Click to zoom',
     animation:google.maps.Animation.DROP,
    });

    markers.push(marker);

    google.maps.event.addListener(marker, 'click', (function(marker, i) {

      return function() {
        infowindow.setContent(locations[i][0]);
        infowindow.open(map, marker);
        map.setZoom(20);
      }
    })(marker, i));
  }
  autoCenter();
}
google.maps.event.addDomListener(window, 'load', initialize);

function triggerClick(i) {
  google.maps.event.trigger(markers[i], 'click');
}

function autoCenter() {
  var bounds = new google.maps.LatLngBounds();
  for (var i = 0; i < markers.length; i++) {
    bounds.extend(markers[i].position);
  }
  map.fitBounds(bounds);
}