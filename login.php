
<?php
	
	if(isset($_GET['status'])){
		$status = $_GET['status'];
	}
?>

<?php
      /*  $cookie_name =$row['username'];
            $cookie_value =$row['type'];
            setcookie($cookie_name, $cookie_value, time() + (86400 * -30), "/");


		$remember=$_COOKIE;
         if($remember!=""){
         header("location:tpindex.php"); 
    }
else{
*/	
?>
		<head>
		
		<title>login Form</title>
		
		</head>
		
		<body>
        <div align="center">
		
				<?php

				if(isset($status)){
					if($status == 'error'){
						echo "<h1 style='color:red;'> Invalid User! Try again...</h1>";
					}else if($status == 'dbError'){
						echo "<h1 style='color:red;'>Something wrong! Please try again...</h1>";
					}
				}
					
				?>		
		</div>
		  <table class="loginbox" align="center">
		    <tr><td><h1>Login Here</h1></td></tr>
		  <form method="POST" action="logCheck.php">
		    <tr><td><p>Username</p></td></tr>
			<tr><td><input type="text" name="username" placeholder="Enter Username "></td></tr>
			<tr><td><p>Password</p></td></tr>
			<tr><td><input type="password" name="password" placeholder=" Enter Password"></td></tr>
			<tr><td><label><input type="checkbox" name="remember"> Remember me</label></td></tr>
			
			
		    <tr><td><input type="submit" name="" value="login"></td></tr>
		     
		    <tr><td><a href="registration.php">dont have account</a></td></tr>
		  </form>
		  
		  
		  
		  </table>
		  
		</body>

<?php// }?>
		
