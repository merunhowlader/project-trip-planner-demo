<fieldset>
    <legend><b>EDIT PROFILE</b></legend>
	<form method="POST" action="php/updateProfile.php">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text" value=""</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text" value="">
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>				
			<tr><td colspan="4"><hr/></td></tr>
		</table>
		<hr/>
		<input type="submit" value="Submit" name="update">		
	</form>
</fieldset>
