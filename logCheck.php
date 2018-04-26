<?php
	session_start();
	require_once('db.php');

	$uname 	= $_POST['username'];
	$pass 	= $_POST['password'];
    $remember=$_POST['remember'];
	//echo $remember;
	if($uname == "" || $pass == ""){
		header("location:login.php?status=error");
	}else{
		$conn = getConnection();

		$sql = "select * from user where username='".$uname."' and password='".$pass."'";
		$result = mysqli_query($conn, $sql);

		$count =  mysqli_num_rows($result);

		if($count == 1){
			
			$row = mysqli_fetch_assoc($result);
			$_SESSION['name'] = $row['name'];
			$_SESSION['pass'] = $row['password'];
			$_SESSION['uname'] = $row['username'];
			$_SESSION['type'] = $row['type'];
          if($remember==on){
			$cookie_name =$row['username'];
            $cookie_value =$row['type'];
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
		  }
			
			header("location: tpindex.php");
		}else{
			header("location:login.php?status=error");
		}
		
	}
?>