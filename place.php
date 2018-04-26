<?php
	
	if(isset($_GET['status'])){
		$status = $_GET['status'];
	}
?>
<?php
	session_start();
       

    if(isset($_SESSION['name'])||isset($_COOKIE['$cookie_name'])){
		
	

?>

<div><h1 align="center" style.color("red");>TRIP PLANNER</h1><br>
<?php include_once 'headup.php';?>
<?php include_once 'head.php';?>

</div>


<div>
<form action="#" method="POST">
<tr>
<td><h4>give place name</h4></td>
<td><input type="text" name="pdplacename"id="hotels"></td>
<td><input type="submit" name="submit" value="detieles"id="hotels"></td>

</tr>

</form>
</div>
<div="sowhotels"></div>

<div width=100%>
<h1>all place details</h1>
				<?php
                 
				
				require_once('db.php');
             if(isset($_POST['submit'])){
				$placename = $_POST['pdplacename']; 
					 
				$conn = getConnection();

		$sql = "select * from pd where placename='".$placename."'";
		$result = mysqli_query($conn,$sql);

			$count =  mysqli_num_rows($result);

		if($count==1){
			
					//header("location:hotels.php?status=$row");

					echo "<table border='1' width=60%>
					<tr>
					
					<th>police contract no</th>
					<th>reating</th>
					</tr>";

					$row = mysqli_fetch_array($result);
					
					echo "<h2>" . $row['placename'] . "</h2>";
					echo "<div>" . $row['details'] . "</div>";
					echo "<td>" . $row['pphn'] . "</td>";
					echo "<td>" . $row['reating'] . "</td>";
				
					echo "</tr>";
					
					echo "</table>";

                 //mysqli_close($conn);
		  
			
		             }
					 
					 
				 }
					
					
					
					
				?>	






</div>


   <div class="ad" align="buttom" >
   <?php include_once 'ad/slideshow.php';?>
   </div>
   
   <?php

}else{
    header("location: login.php");
}
?>