<?php
	session_start();
	require_once('db.php');

    if(isset($_SESSION['name'])){

    	$conn = getConnection();
    	$sql = "select * from user where username='".$_SESSION['uname']."'";
    	$result = mysqli_query($conn, $sql);
    	$row = mysqli_fetch_assoc($result);
?>
<div><h1 align="center" style.color("red");>TRIP PLANNER</h1><br>
<?php include_once 'headup.php';?>
<?php include_once 'head.php';?>

</div>
<fieldset>
    <legend><b>PROFILE</b></legend>
	<form>
		<br/>
		<table cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><?=$row['name']?></td>
				<td rowspan="7" align="center">
					<img width="128" src="image/<?=$row['pic']?>"/>
                    <br/>
                    <a href="../write/picture.html">Change</a>
				</td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><?=$row['email']?></td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>			
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td><?=$row['gender']?></td>
			</tr>
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Date of Birth</td>
				<td>:</td>
				<td><?=$row['dob']?></td>
			</tr>
		</table>	
        <hr/>
        <a href="edit_profile.html">Edit Profile</a>	
	</form>
</fieldset>

<?php

}else{
    header("location: login.php");
}
?>