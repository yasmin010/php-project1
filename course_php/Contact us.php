<!DOCTYPE html>
<html>
<head>
	<title> Contact us </title>
	<meta charset="utf-8">
</head>
<style>
br{
	display: block;

}
 .fname, .lname, .mail{
	width: 300px;

}
header{
	background-color: #0070FF;
}

main{
	
	padding-left: 100px;
}

aside{
	float: right;
	padding-top: 1px;

	
}
fieldset{
	width: 500px;
}
</style>
<body>
	<?php
	include 'Home.php';
	?>
	<header> <h1> CONTACT </h1></header>
	 
	<main>
		<fieldset>
		<legend>Contact us </legend>
	<br>
	<input class="fname" type="text" name="fname" value="First name*">
	</br>

	<br>
	<input class="lname" type="text" name="lname" value="Last name*">
	</br>

	<br>
	<input class="mail" type="mail" name="mail" value="Email*">
	</br>

	<br>
	<textarea name ="comment" rows ="10" cols ="40">Message*</textarea>
     </br>

     <br>
     <input type="submit" name="send" value="send">
     <input type="reset" name="reset" value="Reset">
     </br>
     </fieldset>
    </main>
     

     <aside> 
     	<fieldset>
     		<legend>Information</legend>
     	<p>TEL: 999 657 854 22.</p>
     	<p>Google+: jasoosaid@gmail.com.</p>
     	<p>Address: cairo.</p>

      <br>
      <a href="https://www.facebook.com"><img src="facebook1.png" width="30px"></a>
      <a href="https://mobile.twitter.com/session/new"><img src="twitter1.png" width="30px"></a>
      <a href="https://login.yahoo.com/m"><img src="yahoo1.png" width="30px"></a>
       </br>
       </fieldset>
     </aside>
</body>
</html>