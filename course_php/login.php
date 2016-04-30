<?php
if (isset($_POST['mail'])) {
	

$query ="select * from login_form
where mail= '$_POST[mail]'
and password= '$_POST[password]'
";


mysql_connect("localhost", "root", "");
mysql_select_db("login_form");
$result = mysql_query($query);
}

?>
<!DOCTYPE html>
<html lang="EN">
<head>
<meta charset="utf-8">
<title> www.loginform.php</title>
</head>
<style>
label{
	display: block;
	
	padding-bottom: 20px;
	padding-top: 30px;
	
}
input{
	border-radius: 4px;
	width: 250px;
	height: 30px;
	margin-left: 100px;

}

span{
	font-size: 20px;
	
}
.b1{
	padding-right: 20px;
	background-color: #0066cc;
	color: white;
	width: 60px;
	height: 40px;
	text-align: center; 
	margin-left: 150px;

}
.remb {
 
}
</style>
<body>
	<form method="post">
		<label>
		<span>E-mail: </span>
		<input type="email" name="mail">
	</lable>


	<label>
		<span>Password:</span>
		<input type="password" name="password">
				
		</label>

		<label class="remb">
			<input type="checkbox">
			<span>Remember Me </span>
			
		</label>
	<button class="b1">LOGIN</button>

	</form>
</body>
</html>
