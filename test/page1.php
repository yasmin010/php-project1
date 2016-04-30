<!DOCTYPE html>
<html>
<head>
    <title> firstpage </title>
    <meta charset="utf-8">

</head>
<style>
input {
	width: 250px;
	height: 20px;
	padding: 10px 6px;
	font-size: 14px;
	line-height: 20px;
	vertical-align: middle;
	border-radius: 4px;
	margin-bottom: 20px;
}

span{
	font-size: 20px;
	
}
.button{
	padding-right: 20px;
	background-color: #eeeeee;
	color: blue;
	width: 60px;
	height: 40px;
	text-align: center; 
	margin-left: 150px;

}
.logins{
	border-radius: 30px;
	padding-left: 100px;
}
</style>
<body>
	<?php
       session_start();

         if(!mysql_connect("localhost", "root" ,""))
         {
             die('oops connection problem ! --> '.mysql_error());
          }
         if(!mysql_select_db("dbtest"))
          {
            die('oops database selection problem ! --> '.mysql_error());
           }

       if(isset($_SESSION['user'])!="")
         {
           header("Location: page1.php");
          }
       if(isset($_POST['login']))
         {
       $names = mysql_real_escape_string($_POST['names']);
        $upass = mysql_real_escape_string($_POST['password']);
        $res=mysql_query("SELECT * FROM users WHERE password= $upass");
            $row=mysql_fetch_array($res);
           if($row['password']==($upass))
              {
              	?>
                 <script>window.location.assign("login.php")</script>
                 <?php
               
                }
               else
               {
                 ?>
             <script>alert('wrong details');</script>
              <?php
                }
 
                }
?>
    <div id="login-form">
     <fieldset class="logins">
		<h2>login form</h2>
		<form  method="POST">
		    <span>Name:</span>
		       <input type="text" name="names" onFocus="this.style.backgroundColor='pink';" onBlur="this.style.backgroundColor='white';">
		      <br> <br>
		    <span>Password:</span>
		       <input type="password" name="password" onFocus="this.style.backgroundColor='pink';" onBlur="this.style.backgroundColor='white';">
		       <br><br>
		    <a href="Rigistration_user.php">Rigster if you new </a>
		       <br><br>
		   <input class="button" type="submit" name="login" value="Login">
		</form>
          
		
         
	</fieldset>
</form>

</body>
</html>
