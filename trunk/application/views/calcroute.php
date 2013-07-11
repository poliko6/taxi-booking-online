

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Displaying text directions with <code>setPanel()</code></title>
	<link href="http://code.google.com//apis/maps/documentation/javascript/examples/default.css" rel="stylesheet" type="text/css">
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
     <style>
      #directions-panel {
        height: 100%;
        float: right;
        width: 390px;
        overflow: auto;
      }

      #map-canvas {
        margin-right: 400px;
      }

      #control {
        background: #fff;
        padding: 5px;
        font-size: 14px;
        font-family: Arial;
        border: 1px solid #ccc;
        box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
        display: none;
      }

      @media print {
        #map-canvas {
          height: 500px;
          margin: 0;
        }

        #directions-panel {
          float: none;
          width: auto;
        }
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var map;
var markers = [];
var s=0;
function initialize() {
  directionsDisplay = new google.maps.DirectionsRenderer();
  var mapOptions = {
    zoom: 7,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    center: new google.maps.LatLng(41.850033, -87.6500523)
  };
   map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
  directionsDisplay.setMap(map);
  directionsDisplay.setPanel(document.getElementById('directions-panel'));

  var control = document.getElementById('control');
  control.style.display = 'block';
  map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);
  
  google.maps.event.addListener(map, 'click', function(event) {
    addMarker(event.latLng);
  });
}


function addMarker(location) {
	if(s<2)
  {

  var marker = new google.maps.Marker({
    position: location,
    map: map
  });
    markers.push(marker);
  s++;
  }
  
map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
  }


// Sets the map on all markers in the array.
function setAllMap(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}
function calcRoute() {
	
	 var start = markers[0].position;
  var end = markers[1].position;

  var request = {
    origin: start,
    destination: end,
    travelMode: google.maps.TravelMode.DRIVING
  };
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    $("#Distance").val(response.routes[0].legs[0].distance.text);
    $("#start").val(response.routes[0].legs[0].start_address);
    $("#end").val(response.routes[0].legs[0].end_address);
    }
    else{
    	alert("Error: "+status);
    }
  });

}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </head>
  <body>
    <div id="control">
      <strong>Start:</strong>
      
      <input type="text" id="start"  />
      <strong>End:</strong>
      
      
       <input type="text" id="end" />
         <strong>Distance:</strong>
       <input type-"text" id="Distance" />
       <input type="button" value="Estimate" onclick="calcRoute();" />
       
    </div>
    
    <div id="directions-panel"></div>
    <div id="map-canvas"></div>
  </body>
</html>

