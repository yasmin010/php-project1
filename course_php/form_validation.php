<?php
if (isset($_COOKIE['user'])) {
	if (!empty($_COOKIE['user'])) {
		echo "<p align=center> welcome $_COOKIE[user]
		<a herf=logout.php> (logout) </a> </p>";
	}
	}
?>
<!DOCTYPE HTML>
<html>
<head>
	<style>
	.error {color: #FF0000;} 
	</style>
</head>
<body>

	<?php
	//define variables with empty values 
	$nameErr = $emailErr = $genderErr = $websiteErr ="";
	$name = $email = $gender = $comment = $website = "";

	if($_SERVER["REQUEST_METHOD"] == "post"){
		if(empty($_POST["name"])){
			$nameErr = "Name is required";
		}
		else{
		$name = test_input($_POST["name"]);
		// check only if name contain whitespace and letters
		if(!perg_match("/^[a-zA-Z ]*$/" , $name)){
			$nameErr ="Only letters and white space allowed";
		}
	        }
	    if(empty($_POST["email"])){
			$emailErr = "Email is required";
		}
		else{
		$email = test_input($_POST["email"]);
		// check if email have email form 
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$emailErr ="invalid email format";
		}
	}
	if(empty($_POST["website"])){
			$website = "";
		}
		else{
		$website = test_input($_POST["website"]);
		// check if website have avalid url
		if(!perg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?
			=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
			$websiteErr ="Invalid URL";
		}
	}
	if(empty($_POST["comment"])){
			$comment = "";
		}
		else{
		$comment = test_input($_POST["comment"]);
	}
	if(empty($_POST["gender"])){
			$genderErr = "Gender is required";
		}
		else{
		$gender = test_input($_POST["gender"]);
	}
	}
      

    function test_input($data){
    	$data =trim($data);
    	$data =stripslashes($data);
    	$data =htmlspecialchars($data);
    	return $data;

    }
?>

	<h2>PHP Form Validation Example</h2>
    <P><span class ="error">* required field.</span></p>
	<form method ="post" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
	Name: <input type ="text" name ="name" value ="<?php echo $name;?>">
	<span class ="error">* <?php echo $nameErr;?></span>
	<br><br>
	E-mail: <input type ="text" name ="email" value ="<?php echo $email;?>">
	<span class ="error">* <?php echo $emailErr;?></span>
	<br><br>
	Website: <input type ="text" name ="website" value ="<?php echo $website;?>">
	<span class ="error">* <?php echo $websiteErr;?></span>
	<br><br>
	comment: <textarea name ="comment" rows ="5" cols ="40"> <?php echo $comment;?></textarea>
	<br><br>
	Gender: <input type ="radio" name ="gender" 
	          <?php if (isset($gender) && $gender =="female") echo "checked";?>
	             value ="female">Female
	         <input type ="radio" name ="gender"
	         <?php if (isset($gender) && $gender =="male") echo "checked";?>
	           value ="male">Male
   <span class ="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name ="submit" value ="submit">
      
	</form>

<?php
echo "<h2> Your input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>



