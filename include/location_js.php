 <script type="text/javascript">




function getQueryStrings() { 
  var assoc  = {};
  var decode = function (s) { return decodeURIComponent(s.replace(/\+/g, " ")); };
  var queryString = location.search.substring(1); 
  var keyValues = queryString.split('&'); 

  for(var i in keyValues) { 
    var key = keyValues[i].split('=');
    if (key.length > 1) {
      assoc[decode(key[0])] = decode(key[1]);
    }
  } 

  return assoc; 
} 

var qs = getQueryStrings();
var desitnationlat = <?php echo $lang; ?>;
var destinationlng = <?php echo $lat; ?>;
var callno = 0;
var destination = 0;

      function getLocation(){

      {
          if (navigator.geolocation)

          {

              var options = {
                  enableHighAccuracy: true,
                  timeout: 5000,
                  maximumAge: 0
              };

              navigator.geolocation.getCurrentPosition( success, error,options);
          }

          else

          { x.innerHTML= "Geolocation is not supported by this browser."; }
      }

  }

  function error(e) {

  console.log("error code:" + e.code + 'message: ' + e.message );

  }

  function success(position) {
     var  lat  =  position.coords.latitude;
     var  lng =  position.coords.longitude;

     var  myLocation =   new google.maps.LatLng(lat, lng);


     var mapOptions = {
          center: new google.maps.LatLng(myLocation.lat(),myLocation.lng()),
          zoom: 13,
          mapTypeId: google.maps.MapTypeId.ROADMAP
      };

      var map = new google.maps.Map(document.getElementById("map-canvas"),
              mapOptions);


      var directionsDisplay;
 	 var directionsService = new google.maps.DirectionsService();

directionsDisplay = new google.maps.DirectionsRenderer();
var start = new google.maps.LatLng(lat, lng);
var clat;
var clng;
    var end ;
	end = new google.maps.LatLng(desitnationlat, destinationlng);
	
	var distanc = getDistanceFromLatLonInKm(lat,lng,desitnationlat,destinationlng);
	
	distanc = Math.round(distanc * 100) / 100
	if(distanc < .<?php echo $radijus; ?>){
     document.location = "https://www.bikeapp.info/web/prijava_lokacije.php?lang="+lng+"&lat="+lat+"&lokacija=<?php echo $kod_lokacije_prihvat; ?>";
		}else{
		document.getElementById("dist_div").innerHTML = "<?php echo $pl5; ?> " + distanc + " <?php echo $pl6; ?> <?php echo $radijus; ?> <?php echo $pl7; ?>";	
		}
	
    var request = {
      origin: start,
      destination: end,
      travelMode: google.maps.TravelMode.DRIVING
    };
	var myLatLng = {lat: lat, lng: lng};

	var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: '<?php echo $pl8; ?>'
        });

	directionsService.route(request, function(response, status) {
      if (status == google.maps.DirectionsStatus.OK) {
        directionsDisplay.setDirections(response);
        directionsDisplay.setMap(map);
      } else {
        alert("Directions Request from " + start.toUrlValue(6) + " to " + end.toUrlValue(6) + " failed: " + status);
      }
    });

  }
  google.maps.event.addDomListener(window, 'load', getLocation() );
   
setInterval(function(){
	if(destination==0){
	google.maps.event.addDomListener(window, 'load', getLocation() );
}
	},30000);
	
	
	function getDistanceFromLatLonInKm(lat1,lon1,lat2,lon2) {
  var R = 6371; // Radius of the earth in km
  var dLat = deg2rad(lat2-lat1);  // deg2rad below
  var dLon = deg2rad(lon2-lon1); 
  var a = 
    Math.sin(dLat/2) * Math.sin(dLat/2) +
    Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * 
    Math.sin(dLon/2) * Math.sin(dLon/2)
    ; 
  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
  var d = R * c; // Distance in km
  return d;
}

function deg2rad(deg) {
  return deg * (Math.PI/180)
}

  </script>