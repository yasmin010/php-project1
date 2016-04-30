<!DOCTYPE html>
<html>
<head>
	<title>www.home.com</title>
	<meta charset="utf-8">

    <script type="text/javascript">
        var imcount=1;
        var total =5;

        function slide(x){
            var images= document.getElementByid('img');
            imcount = imcount + x ;
            if (imcount >total) {
                imcount = 1;
            } 
            elsif(imcount <1 ){
            imcount =total;
            }

            images.src ="img" + imcount +".jpg";
         }
         window.setInterval(function slidein(){
            var images= document.getElementByid('img');
            imcount = imcount + 1 ;
            if (imcount >total) {
                imcount = 1;
            } 
            elsif(imcount <1 ){
            imcount =total;
            }

            images.src ="img" + imcount +".jpg";
         },50000);

        </script>
</head>
<style>
nav{
	background-color: #ddd;
	font-size: 20px;
	padding-top: 10px;
    padding-bottom: 10px;

}

a{
	padding-left: 200px;
	
}
span{
	padding-left: 150px;
}

.image { 
    margin: 50px auto; 
    position: relative; 
    width: 240px; 
    height: 240px; 
    padding: 10px; 
    box-shadow: 0 0 20px rgba(0,0,0,0.4); 
}

.image > div { 
    position: absolute; 
    top: 10px; 
    left: 10px; 
    right: 10px; 
    bottom: 10px; 
}
.prevButton{
    position: absolute;
    top: 25%;
    left:2px;
}

.nextButton{
    position: absolute;
    top: 25%;
    right:2px;
}
</style>
<body onload="slidein()">
	<header>
	<nav>
	<a href="Home.php">Home</a>
	 <span>|</span>
	<a href="www.about.com">About</a>
	 <span>|</span>
	<a href="Contact us.php">Contact us</a>
	</nav>

   
    <div id="image" >
    
 
	<img src="im1.jpg" width="1350" height="250">
	<!--<img src="im1.jpg" width="1350" height="250">-->
    <!--<img src="im2.jpg" width="1350" height="250">-->
    <!--<img src="im3.jpg" width="1350" height="250">-->
   <!-- <img src="im4.jpg" width="1350" height="250"> -->
    </div>
    <div class="prevButton"><img onclick="slide(-1)" src="left.jpg" width="30px" height="30px"></div>
	<div class="nextButton"><img onclick="slide(1)" src="right.jpg" width="30px" height="30px"></div>
    
    

	
	</header>
</body>
</html>
