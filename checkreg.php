<?php

	require_once('db.php');
	
	$name 				= $_POST['name'];
	$email 				= $_POST['email'];
	$userName 			= $_POST['username'];
	
	$address			= $_POST['address'];
	$gender 			= $_POST['gender'];
	$password 			= $_POST['password'];
	$conpassword 	= $_POST['conpassword'];
	$dob				= $_POST['date'];
	$type				= '0';
	 $dob;
    
	 if($password == $conpassword){

		//$password = md5($password);

		if($name == "" ){
			header("location:registration.php?status=error");
		}else{

			$conn = getConnection();

			$sql = "insert into user values('$name','$userName','$email',$dob,$address,'$gender', '$password','$type','')";
            
			if(mysqli_query($conn, $sql)){

				header("location:login.php?");
			}else{
				echo mysqli_query($conn, $sql);
				header("location:registration.php?status=dbError");
			}
		}

	}else{
		//echo $conpassword;
		header("location:registration.php?status=passError");
	}

	
?>