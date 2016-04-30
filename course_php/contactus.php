<DOCTYPE html>
	<html lang="en">
	<title>Contact Us</title>
	<meta href="utf-8">
	<style>

	nav,ul{
		display: inline-block;
		background-color: pink;
		padding-bottom: 2px;
		padding: 5px solid;
	    color: white;
	    margin: 20px;
	    font-size: 20px;

	}

	input{
		display: block;
		padding: 10px;
		border-bottom: 20px;
		margin-bottom: 10px;


	}

	.form{
		background-color: pink ;
		

	
}

    h1{
    	color: red;
    	background-color: #ddd;

    	padding: 10px 500px 10px;
    	border-top: 20px;
    	border-bottom: 20px;
    	border-left: 20px;
    	border-right: 20px;
    	border-color: red;
    }
     

     section aside{
     	float: right;
     	position: relative;
     	padding: 10px 90px 30px;
     	margin:2px;
     }

     section div.form{
     	float: left;
     	position: relative;
     	padding: 10px 350px 0px;
     	

     }

     section  div.contact aside{
     	background-color: pink;
     }

    
	 
	</style>
	<body>


		<nav>
		<ul><a href="/default.asp">Home</a></ul>
		<ul><a href="Our Menu/default.asp">Our Menu</a></ul>
		<ul><a href="Online Reservation/default.asp">Online Reservation</a></ul>
		<ul><a href="About US/default.asp">About Us</a></ul>
		<ul><a href="Contact Us/default.asp">Contact Us</a></ul>
       
	</nav>

	<h1>Contact US</h1>


		<?php
		// define variable
		$name =$email =$phone =$question =$send="";
		?>
         
         <section>
         <div class="form">

		Name: <input type="text" value="<?php echo $name;?>">
		Email: <input type="text" value="<?php echo $email;?>">
		Phone: <input type="text" value="<?php echo $phone;?>">
		Question/Message: <input type="text" value="<?php echo $question?>">
         <input type="button"  value="SEND">
         </div>
         </section>

         
         	<section>
         		<div class="contact">
         	<aside>

         	<h2>Contact Us</h2>
         	Phone: <br>
         	123-456-7890 <br>
         	<div style=" border-top:1px solid"><br>

         	Email: <br>
         	info@restaurantname.com <br>
         	<div style=" border-top:1px solid"><br>
         	Address: <br>
         	london,str,lorem ipsum 23445 <br>
            </aside>
            </div>
            </section>
         



	</body>
	</html>
