<?php
	
	if(isset($_GET['status'])){
		$status = $_GET['status'];
	}
?>
<?php
	session_start();
       

    if(isset($_SESSION['name'])||isset($_COOKIE['$cookie_name'])){
		
	

?>

<div><h1 align="center">TRIP PLANNER</h1><br>
<?php include_once 'headup.php';?>
<?php include_once 'head.php';?>

</div>


<div>
<form action="#" method="POST">
<tr>
<td><h4>give place name</h4></td>
<td><input type="text" name="placename"id="hotels"></td>
<td><input type="submit" name="submit" value="Find hotels"id="hotels"></td>

</tr>

</form>
<div="sowhotels"></div>

<div width=100%>
<h1>all hotels of this place</h1>
				<?php
                 
				
				require_once('db.php');
                 if(isset($_POST['submit'])){
				$placename = $_POST['placename']; 
					 
				$conn = getConnection();

		$sql = "select * from hotels where hlocation='".$placename."'";
		$result = mysqli_query($conn, $sql);

		$count =  mysqli_num_rows($result);
        //$row = mysqli_fetch_assoc($result);
		if($count>0){
			
					//header("location:hotels.php?status=$row");

					echo "<table border='1' width=100%>
					<tr>
					<th>location</th>
					<th>hotelname</th>
					<th>rating</th>
					<th>hotel reant</th>
					<th>mobile no</th>
					</tr>";

					while($row = mysqli_fetch_array($result))
					{
					echo "<tr>";
					echo "<td>" . $row['hlocation'] . "</td>";
					echo "<td>" . $row['hname'] . "</td>";
					echo "<td>" . $row['hreating'] . "</td>";
					echo "<td>" . $row['hrent'] . "</td>";
					echo "<td>" . $row['hphn'] . "</td>";
					echo "</tr>";
					}
					echo "</table>";

                 mysqli_close($conn);
		  
			
		             }
				 }
					
				?>	






</div>
</div>
   <div class="ad" align="buttom" >
   <?php include_once 'ad/slideshow.php';?>
   </div>
   
   <?php

}else{
    header("location: login.php");
}
?>