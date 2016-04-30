<?php

     if(isset($_FILES['image'])){
      $errors= array();

      $dir = 'images/';
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      $extension = strtolower(substr($image, strpos ($image, '.') +1));
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 5000000){
      	?>
      	<script> alert('File size must be excately 2 MB');</script>
      	<?php
        
      }
      
      if(empty($file_name)){
      	?>
      	<script>alert('Please choose an image to upload ');</script>
      	<?php
         move_uploaded_file($file_tmp,"images/".$file_name);
         
      }else{
         print_r($errors);
      }
   }


                 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Seconde Page </title>
    <meta charset="utf-8">
    <script type="text/javascript">
    function testvalue(){
    	var content = document.getElementById("comment");
    	var content1 = document.getElementById("adress");

    	if (content.value.length == 0) {
    		alert("please enter comment"); 
    		content.foucus();
    		return false;
    	};
    	if (content1.value.length == 0) {
    		alert("please enter adress"); 
    		content.foucus();
    		return false;
    	};
    }
    </script>

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
	width: 100px;
	height: 40px;
	text-align: center; 
	margin-left: 150px;
	font-size: 20px;
	float: left;

}
.news{
	padding-left: 100px;
	
    float: :left;

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
       $comment = $_POST['comment'];
       $address = $_POST['adress'];
       $image = $_POST["image"]; 
       $img = "upload/".$image;
       $result = mysql_query("INSERT INTO news (comment,address,img) 
         	        VALUES('$comment','$address','$image')");

       if($result){
           
              
             ?>
               <!-- <script>alert('successfully registered ');</script> -->
                <script>window.location.assign("news.php")</script>
                 

              <?php
            }
              else
            {
            ?>
             
                  <script>alert(' cant insert to  error ');</script>
            
          

             <?php
             }
             }      
        ?>
	
	
		<fieldset class="news">
			<form method="POST" onSubmit="testvalue();">
				<textarea name="comment" id="comment" rows="5" cols="40" placeholder="Comment"></textarea>
				<br><br>
				<span>Adress:</span>
		        <input type="text" name="adress" id="adress" onFocus="this.style.backgroundColor='pink';" onBlur="this.style.backgroundColor='white';">
		        <br><br>
		        <span> Select image to upload: </span>
                 <input type = "file" name = "image" value="image" />
                 <br><br>
                 <input class="button" type="submit" name="login" value="Comment">
                 
		       

			</form>
			</fieldset>
	
</body>
</html>