<?php
$msg = "";
        mysql_connect("localhost", "root" ,"");
		mysql_select_db("project");
if (isset($_POST['Login'])) {
	if ( !empty($_POST['usename']) && !empty('pass')) {
		$msg ="please enter username";
	}
	else{
		$query ="SELECT * FROM add_user 
		        WHERE Username='$_POST[usename]' and 
		        Password='$_POST[pass]'";
		       $result= mysql_query($query);

		       if (mysql_affected_rows() ==1 ) {
		       if (isset($_POST['remb'])) {
		       	setcookie("username", $_POST['usename'], time() + 60*60*24*365);
		       }else{
		       	setcookie("username", $_POST['usename']);
		       }

		       }
		       
	}
}

?>

<DOCTYPE html>
<html>
<head>
<title> signup</title>
<meta charset="utf-8">
</head>
<style>
td{
	width: 130px;
}

</style>
<body>
	
		<div>
			<form action="signup" method="post" align="center">
				<table>
			<tr>
				<th> User name:</th>
				<td><input type="text" name="usename" class="name"></td>
			</tr>
			<tr>
				<th> Password:</th>
				<td><input type="password" name="pass" class="password"></td>
			</tr>
			<tr>
				<th> Remember me:</th>
				<td><input type="checkbox" name="remb"></td>
			    
			</tr>
			<tr> 
				<th> <?php  $msg; ?></th>
			</tr>
			<tr>
				<th><input class="Login" type="submit" value="Login" name="Login" ></th> 
			</tr>
			    </table>
			</form>
			

		</div>

	
</body>
</html>