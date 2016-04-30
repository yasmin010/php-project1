<!DOCTYPE html>
<html>
<head>
	<title> slideshow with  java script and html</title>
	<meta charset="utf-8">
	<script type="text/javascript">
	var imagecount = 1;
	var total = 9;

	function slide(x){
		var image = document.getElementById("img");
		imagecount = imagecount + 1;

            if (imagecount > total) {
            	imagecount = 1;

            }
            if (imagecount < 1) {
            	imagecount = total;

            };
		image.src = "im" + imagecount + ".jpg";


	}
	window.setInterval(function slideA(){
		var image = document.getElementById("img");
		imagecount = imagecount + 1;

            if (imagecount > total) {
            	imagecount = 1;

            }
            if (imagecount < 1) {
            	imagecount = total;

            };
		image.src = "im" + imagecount + ".jpg";


	},5808);

	</script>
</head>
<style>


nav{
	background-color: #556677;
	font-size: 20px;
    width: 1350px;
    height: 30px;
}
a{

	padding-left:100px;
	color:#363636;
	font-weight:bold;
	text-decoration:none;
}
a:hover{
	color: #44fbfe;
}

img{
	width: 1350px;
	height: 400px;
}
#left_holder{
	height: 458px;
	width: 180px;
	position: absolute;
	left: 8px;
	top: 0px;


}
#right_holder
{
	height: 458px;
	width: 180px;
	position: absolute;
	right: 8px;
	top: 0px;

}
.left{
	height: 50px;
	width: 58px;
	position: absolute;
	top: 40%;
	left: 8px;

}
.right{
	height: 50px;
	width: 58px;
	position: absolute;
	top: 40%;
	right: 8px;

}
.content{
	border-radius: 30px;
	margin-bottom: 20px;
	width: 100px;
	height: 300px;
	}
</style>
<body onLoad="slideA()">
	<div class="navigation">
   	<nav>
   		<ul>
   			<a href="">Home</a>
   			<a href="">Products</a>
   			<a href="">Places</a>
   			<a href="">Design your product</a>
   			<a href="">About Us</a>
   			<a href="">Contact Us</a>

   		</ul>
   	</nav>
   </div>
   <div id="container">
   	<img id="img" src="im5.jpeg" name="slideshow" >
   </div>

   <div id="left_holder">
   	<img src="left.jpg" class="left" onClick="slide(-1)">
   </div>

   <div id="right_holder">
   	<img src="right.jpg"class="right" onClick="slide(1)">
   </div>
   <div id="form">
   	<fieldset class="content">
   		<h2>Floors</h2>
   		<img src="img.jpg" width="60px" height="60px">
   	</fieldset>
   </div>
   
   	
   		
   		


</body>
</html>