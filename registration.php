
<?php
	
	if(isset($_GET['status'])){
		$status = $_GET['status'];
	}
?>
<html>
<head>
<title>Register form</title>
<style>
h5{
    margin:0;
	padding:20px 0 20px;
	text-align:center;
	font-size:15px;

}


</style>

</head>
<body>

<div align="center">
<h1 id="emessage"></h1>
<?php

if(isset($status)){
	if($status == 'error'){
		echo "<h1 style='color:red;'> Null value found! please submit again....</h1>";
	}else if($status == ""){
		echo "";
	}else if($status == 'passError'){
		echo "<h1 style='color:red;'>Password and confirm pass didn't match!</h1>";
	}else if($status == 'dbError'){
		echo "<h1 style='color:red;'>Something wrong! Please try again...</h1>";
	}else {
		echo "<h1 style='color:green;'> Success!</h1>";
	}
}
	
?>

</div>


<div>


<form action="checkreg.php" method="POST" onsubmit="return ok()" >


<div><h1 align="center">TRIP PLANNER</h1></div>



 <table align="center">
     <tr>
		 <td colspan="3"><h3 align="center">Register Here</h3></td>
		 
	</tr>
    <tr>
		 <td><h5>Name</h5></td>
		 <td><input type="text" name="name" id='name' placeholder="Give your name " onblur="getName()"></td>
		 <td colspan="2"><span id='nameError'></span></td>
	</tr>
	 <tr>
		 <td><h5>UserName</h5></td>
		 <td><input type="text" name="username" id='username' placeholder="Give you Username " onblur="getUserName()"></td>
		 <td colspan="2"><span id='usernameError'></span></td>
	</tr>
	<tr>
		 <td><h5>Email</h5></td>
		 <td><input type="text" name="email" id='name' placeholder="Give your Email address" onblur="getEmail()"></td>
		 <td colspan="2"><span id='emailError'></span></td>
	</tr>
	<tr>
		 <td><h5>Date Of Birth:</h5></td>
		 <td><input type="date" name="date" id="dob"></td>
		 <td colspan="2"><span id='dobError'></span></td>
	</tr>
	<tr>
		 <td><h5>Address:</h5></td>
		 <td><input type="text" name="address" id="address"></td>
		 <td colspan="2"><span id='addressError'></span></td>
	</tr>
	<tr>
		 <td><h5>Gender:</h5></td>
		 <td><input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
			<input type="radio" name="gender" value="other"> other</td>
		 <td colspan="2"><span id='dobError'></span></td>
	</tr>
	<tr>
		 <td><h5>Password:</h5></td>
		 <td><input type="password" name="password" id="pass"></td>
		 <td colspan="2"><span id='passError'></span></td>
	</tr>
	<tr>
		 <td><h5>Conform Password:</h5></td>
		 <td><input type="password" name="conpassword" id="conpass"></td>
		 <td colspan="2"><span id='conpassError'></span></td>


	</tr>
		<tr>
		 <td></td>
		 <td colspan="2"><input type="submit" name="" value="create account"><a href="login.php">have an account</a></td>
	</tr>
 
 </table>



</form>






</div>

<script type="text/javascript" src='registration.js'></script>
</body>


</html>
