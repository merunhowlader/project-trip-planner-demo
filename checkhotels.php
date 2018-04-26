<?php session_start();
	require_once('db.php');
	if(isset($_POST['submit'])){
	$hotels 	= $_POST['hotels'];
	
	
	
		if($hotels == ""){
		header("location:login.php?status=error");
	}else{
		$conn = getConnection();

		$sql = "select * from hotels where hlocation='".$hotels."'";
		$result = mysqli_query($conn, $sql);

		$count =  mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
		if($count>0){
			
					//header("location:hotels.php?status=$row");

					echo "<table border='1'>
					<tr>
					<th>Firstname</th>
					<th>Lastname</th>
					</tr>";

					while($row = mysqli_fetch_array($result))
					{
					echo "<tr>";
					echo "<td>" . $row['hlocation'] . "</td>";
					echo "<td>" . $row['hname'] . "</td>";
					echo "</tr>";
					}
					echo "</table>";

                 mysqli_close($conn);
		  
			
		}else{
			header("location:login.php?status=error");
		}
	
	}
	
	}
	?>