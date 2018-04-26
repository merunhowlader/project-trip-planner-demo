var fname=false;

function ok(){
	
	document.getElementById('emessage').innerHTML= "give all valid info";
	
	document.getElementById('emessage').style.color= "red";
	
	if(fname==true){
		
		return true;
		
	}
	else{
		return false;
	}
}

function getName(){
	var a = document.getElementById('name').value;
	//alert(a);
	//document.getElementById('nameError').innerHTML= a;
	var n=a.length;
	if(a!=""){

	var letters = /^[A-Za-z]+$/;
      if(a.match(letters))
      {
      
	   document.getElementById('nameError').innerHTML= "";
	   fname=true;
	   
      
      }
      else
      {
      document.getElementById('nameError').innerHTML= "Please input alphabet characters only";
	  document.getElementById('nameError').style.color= "red";
      
      }
	  
	}
		

	else{
	
      
	    var mes= " must be filled";
		document.getElementById('nameError').innerHTML= mes;
		document.getElementById('nameError').style.color= "red";
	  
			  
		
	}
}
function getUserName(){

}

  function getEmail(){
		
  }

