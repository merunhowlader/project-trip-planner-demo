
<?php
	session_start();
       

    if(isset($_SESSION['name'])||isset($_COOKIE['$cookie_name'])){
		
	

?>


<head>
<style>


</style>
  
</head>

<body>
<div><h1 align="center" style.color("red");>TRIP PLANNER</h1><br>
<?php include_once 'headup.php';?>
<?php include_once 'head.php';?>

</div>
<div>
<table width=100% height=70% >
<form>
 <tr>
     <td>from</td>
     <td><input type="text" name="form" id="form"></td>
     <td padding-bottom="0"><input type="button" name="go" value="go" onclick="ok()"></td>
	 <td></td>
     <td id="map" rowspan="2" colspan="4" width=100%  >
    
   
      </td>
	  

 </tr>
  <tr>
     <td>Destination</td>
     <td><input type="text" name="destination" id="destination"></td>
     
 </tr>
 
 <tr>
    <td ></td>
 
 </tr>
 
  <tr>
    <td style.color("red");>Distance</td>
    <td id="distance"></td>
    <td align="left" >km </td>
    <td align="center"style.color("red");>Time</td>
    
    <td id="time"></td>
	<td align="right">hour</td>
    <td align="center" color:red;>Transport Cost</td>
    <td id="tcost"></td>
	<td align="right">TK</td>
	 
	
 
 </tr>
 

 
 </form>



</table>
 </div>
   <div class="ad" >
   <?php include_once 'ad/slideshow.php';?>
    </div>

<script>
var map;
function initMap() {

	  var map;
var service;
var infowindow;
      var uluru = {lat: 23.822893, lng: 90.426025};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
		 
		  
        });
		
       var marker = new google.maps.Marker({
          position:uluru,
          map: map
        });
		var request = {
    location: uluru,
    radius: '500',
    query: 'restaurant'
  };

  service = new google.maps.places.PlacesService(map);
  service.textSearch(request, callback);
      }
	  



function callback(results, status) {
  if (status == google.maps.places.PlacesServiceStatus.OK) {
    for (var i = 0; i < results.length; i++) {
      var place = results[i];
	  alart(place);
      createMarker(results[i]);
    }
  }
}
	  

     
        

    
	  
	  
	  
	  </script>

	  <script type="text/javascript" src='myscript.js'></script>
 <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA56XPG9KxHzVGwJYKrrSpFBLkFZf9Wki8&libraries=places&callback=initMap">
    </script>

 

</body>

<?php

}else{
    header("location: login.php");
}
?>


