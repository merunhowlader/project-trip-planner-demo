//var uluru = {lat:, lng:};

function ok(){
	
	 var destination1=document.getElementById('destination').value;
	 var  destination1=destination1.trim();
	  destination1= destination1.split(" ").join(""); 
	  
	  
	    var  destination1=destination1.toLowerCase();
	   
         var str2 = ",bangladeh";
	     var destination1 = destination1.concat(str2);
		 	var form=document.getElementById('form').value;
			   var  form=form.trim();
	           form= form.split(" ").join("");  
	          var  form=form.toLowerCase();
	  
	   var geocoder =  new google.maps.Geocoder();
	   
 geocoder.geocode( { 'address':form }, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
			
          } else {
            alert("Something got wrong " + status);
			
          }
        });
	   
    geocoder.geocode( { 'address':destination1 }, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
			  
			  if(results[0].geometry.location.lng()>88){
			  var uluru = {lat:results[0].geometry.location.lat(), lng:results[0].geometry.location.lng()};
			  distance(uluru);
			  }
		   //alert("location : " + results[0].geometry.location.lat() + " " +results[0].geometry.location.lng()); 
          } else {
            alert("Something got wrong " + status);
		
          }
        });
	 
	/*switch(destination1) {
    case "patuakhali":
      var uluru = {lat: 22.360115, lng:90.318991};
	   distance(uluru);
        break;
    case "dhaka":
       var uluru = {lat: 23.790061, lng: 90.410743};
	   distance(uluru);
        break;
    case "barisal":
       var uluru = {lat: 22.709319, lng:  90.363160};
	   distance(uluru);
        break
    case "chattagong":
       var uluru = {lat: 22.357054, lng: 91.797552};
	   distance(uluru);
        break;
	 case "cox'sbazar":
       var uluru = {lat: 21.456330 , lng: 92.014232};
	   distance(uluru);
        break;
	case "coxsbazar":
       var uluru = {lat: 21.456330 , lng: 92.014232};
	   distance(uluru);
        break;
	case "coxbazar":
       var uluru = {lat: 21.456330 , lng: 92.014232};
	   distance(uluru);
        break;
		Bhola 
	case "bhola":
       var uluru = {lat: 22.680412, lng: 90.643405};
	   distance(uluru);
        break;
   case "barguna":
       var uluru = {lat: 22.157718 , lng: 90.124111};
	   distance(uluru);
        break; 
   case "jhalokati":

       var uluru = {lat:22.642314 , lng: 90.199195};
	   distance(uluru);
        break;
    case "pirojpur":
       var uluru = {lat: 22.578637 , lng: 89.970297};
	   distance(uluru);
        break;
	case "barguna":
       var uluru = {lat: 22.157718 , lng: 90.124111};
	   distance(uluru);
        break;
    default:
        distance(uluru);;
}
	*/
	
	
	
	
}

function distance(uluru){
	          var uluru = uluru;

			  var form=document.getElementById('form').value;
			   var  form=form.trim();
	           form= form.split(" ").join("");  
	          var  form=form.toLowerCase();
			  var destination1=document.getElementById('destination').value;
			  var  destination1=destination1.trim();
	           destination1= destination1.split(" ").join("");  
	          var  destination1=destination1.toLowerCase();
			  var directionsService = new google.maps.DirectionsService();

			  
			   var str1 = "";
              var str2 = ",bangladeh";
    
    var form = str1.concat(form, str2);
	//alert(form);
	var destination1 = str1.concat(destination1, str2);
		var request = {
			
		  origin      : form, // a city, full address, landmark etc
		  destination :destination1,
		  travelMode  : google.maps.DirectionsTravelMode.DRIVING
		};

		directionsService.route(request, function(response, status) {
		  if ( status == google.maps.DirectionsStatus.OK ) {
			var mes=response.routes[0].legs[0].distance.value ;
		  document.getElementById('distance').innerHTML= parseInt(mes/1000);
		
		if(mes!=0){
			
			var time=mes/35000;
			if(time>=1){
				
			if((mes%35000)==0){
		        document.getElementById('time').innerHTML= parseInt(mes/35000);
				}
			if((mes%35000)>=0.5){
				  document.getElementById('time').innerHTML= parseInt((mes/35000)+1);   
			   }
			}
			else{
				document.getElementById('time').innerHTML=0.5;
			}
		}
		else{
			document.getElementById('time').innerHTML= parseInt(mes/35000);
		}
		  //document.getElementById('tcost').innerHTML= parseInt(mes*.002);
		  var cost=parseInt(mes*.002);
		  var ecost=cost%25;
		  if(ecost>=12){
			  var divcost=parseInt(cost/25);
			  var viewcost=(divcost*25)+25;
			  document.getElementById('tcost').innerHTML=viewcost;
		  }
		  else{
			  
			  document.getElementById('tcost').innerHTML=(cost-ecost);
			  
		  }
		  
		  /////
		  
		 
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: uluru
		  //mapTypeId: 'satellite'
		  //mapTypeId: 'satellite'
        });
		 var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
       
		
		
	 
		
		/////
				
		
	
	    
     
	  
			// the distance in metres
		  }
		  else {
			// oops, there's no route between these two locations
			// every time this happens, a kitten dies
			// so please, ensure your address is formatted properly
				}
                  });
				  
				  

	  
   
}
		