<!DOCTYPE html>
	<html>
	<head>
		<title>data base of parent</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
    $name = $id = $password = $email = $st_id = $st_date = "";
    if (isset($_POST['Rigister'])){


   $names =$_POST['name'];
     $genders =$_POST['id'];
     $citys =$_POST['password'];
     $mails =$_POST['email'];
     $phones =$_POST['st_id'];
     $birthdates =$_POST['st_date'];
     }


		  mysql_connect("localhost", "root" ,"");
    mysql_select_db("parentdb");
    mysql_query(" insert into parent 
                values('$_POST[name]',
                  '$_POST[id]',
                  '$_POST[password]',
                  '$_POST[email]',
                  '$_POST[st_id]',
                  '$_POST[st_date]';)");
    
                  
		?>
		</body>
	</html>