
<!DOCTYPE HTML>
<head>

<?php
include("dbh.php");
$lokacija_id=$_GET['lokacija_id'];

		$result = $con->query("
		SELECT * FROM lokacija
		WHERE id='$lokacija_id' 
		");
							
		while ($obj=mysqli_fetch_object($result))
		{  
		
		include ("include/libs/lokacija.php");
		}
		$geo = explode(",",$geo_lokacija); 
list($lang,$lat)=$geo;   
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Azures BootStrap</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
<style type="text/css">
   
      #map-canvas { height: 400px; }
  </style>
  <script type="text/javascript"
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC71nQwXoxEoLR46PFCQdhfhFYwMRysaMI">
  </script>

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
	if(distanc < .500){
     document.location = "https://www.bikeapp.info/demo/polaganje_lokacije_frame_photo.php?lokacija_id=<?php echo $lokacija_id; ?>";
		}else{
		document.getElementById("dist_div").innerHTML = "You are " + distanc + " kilometars from Exam.<br> When You reach <?php echo $radius; ?> m from Exam, You could take an Exam.<p>";	
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
          title: 'You are here'
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

</head>

<body class="dual-sidebar"> 


            
<div class="all-elements">
    <div class="snap-drawers">
 



        <div id="content" class="snap-content">
          
            
            <div class="content">

            <div class="static-notification bg-blue-dark">
                  <div id="dist_div"></div>
                    </div>  
        
        
            <div id="dist_div"></div>
            <div id="map-canvas"/>
           
            
                
            </div>
        </div>
    </div>  

</div>
    
    

    
</body>





















