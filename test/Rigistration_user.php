
<?php
$name = $gender= $mail= $phone 
=$birthdate =$username =$password =$conf =$city= "";

$names = $genders= $mails= $phones 
=$birthdates =$usernames = $citys="";

$msg = "";


if (isset($_POST['Rigister'])){


	 $names =$_POST['name'];
     $genders =$_POST['gender'];
     $citys =$_POST['city'];
     $mails =$_POST['mail'];
     $phones =$_POST['phone'];
     $birthdates =$_POST['date'];
     $usernames =$_POST['username'];

	
	if (empty($_POST['name'])) {
	    $name ="name is required.";
	}
	elseif (empty($_POST['mail'])) {
		$mail="Email is required.";	
	}
	elseif (empty($_POST['phone'])){
		$phone ="phone is required.";
	}
    elseif (empty($_POST['username'])){
		$username ="username is required.";
	}
    elseif (empty($_POST['password'])){
		$pasword ="password is required.";
	}
	
	elseif ($_POST['password'] != $_POST['confirm']) {
		$conf = "password isnt match";
	}
	else{
		mysql_connect("localhost", "root" ,"");
		mysql_select_db("project");
		mysql_query(" insert into add_user]] 
			          values('$_POST[name]',
			          	'$_POST[gender]',
			          	'$_POST[city]',
			          	'$_POST[mail]',
			          	'$_POST[phone]','$_POST[date]',
			          	'$_POST[username]','$_POST[password]')");

			if ( mysql_errno() == 0){
               setcookie("user", $username);
               
               
             }
     else{
      $msg = "error number: .mysql_error()";
	    
}
	}
	
}
?>
<!DOCTYPE html>
<html lang="EN">
<meta charset="utf-8">
<title> www.rigistratationuser.com</title>
<style>

label{
	display: block;
}
label > span {
	display: inline-block;
	width: 250px;
	line-height: 35px;
}

}
input {
	width: 100px;
	height: 20px;
	padding: 10px 6px;
	font-size: 14px;
	line-height: 20px;
	vertical-align: middle;
	border-radius: 4px;
}
input {
	margin-bottom: 20px;
}
button{
	
	float: ;
}
.login{
padding: 100px;
background-color: #CD5B45;

}

</style>
<body>
	
	<form class="login" method="post">
        <label>
		<span>Name: </span>
		<input type="text" name="name" value ="<?php echo $names; echo $name;?>">
		 </label>

         <label>
		 <span>Gender: </span>
		<input type="radio" name="gender" value="male" <?php if ( $gender == "male")  {

		echo "checked";
		}?> > 
	    <span> Male</span>
		<input type="radio" name="gender" value="female" <?php if ( $gender =="female")  {

		echo "checked";
		}?> > 
		<span> Female</span>
	   
		</label>

		<label>
		<span>City: </span>
			<select name="city">
				<option value="Cairo" <?php if ($city =="Cairo") {
					echo "selected";
				} ?> >Cairo </option>
				<option value="ALEX" <?php if ($city =="ALEX") {
					echo "selected";
				} ?> >ALEX</option>
				<option value="Elbyhurai" <?php if ($city =="Elbyhurai") {
					echo "selected";
				} ?> >Elbyhurai</option>
			</select>
		</label>

		<label>
		<span>E-mail: </span>
		<input type="email" name="mail" value ="<?php echo $mails; echo $mail;?>" >
		</label>

		<label>
		<span>Phone: </span>
		<input type="num" name="phone" value ="<?php echo $phones; echo $phone;?>">
		</label>

		<label>
		<span>Birthdate: </span>
		<input type="date" name="date" value="<?php echo $birthdates; ?> ">
		</label>

		<label>	
		<span>Username: </span>
			<input type="text"  name="username" value ="<?php echo $usernames; echo $username;?>">
		</label>

		<label>
		<span>Password: </span>
			<input type="password" name="password" value ="<?php echo $password;?>">
		</label>

		<label>
		<span>Confirm_password: </span>
			<input type="password" name="confirm">
		</label>
	
	<input class="Rigister" name="Rigister" type="submit" value="Rigister">
	
	</form>
</body>
</html>