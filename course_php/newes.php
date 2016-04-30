<!DOCTYPE html>
<html>
<head>
    <title> firstpage </title>
    <meta charset="utf-8">

</head>
<style>
 .newss{
    width: 900px;
    height: 200px;
	border-radius: 30px;
	padding-left: 100px;
	margin-bottom: 10px;
	background-color: #eeeeee;



 }
</style>
<body>
<?php
         $connect = mysql_connect("localhost", "root" ,"");

         if(!$connect)
         {
             die('oops connection problem ! --> '.mysql_error());
          }
         if(!mysql_select_db("dbtest"))
          {
            die('oops database selection problem ! --> '.mysql_error());
           }
       $record = mysql_query("select * from news");
       $sqimage = mysql_query("select img from news ");

       if (!$record) {
            
           echo "error";
       }
       ?>
        <?php 

        while(($rows = mysql_fetch_array($record))) { 
        	?>
        	<fieldset class="newss">
            <?php echo "date : " .date("Y.m.d") .date("h:i:sa"); ?>
           <br>
        	<p> <?php echo $rows['comment']; ?></p>

            <a href="#"><?php echo $rows['address'] ?><a>

             <!-- <img src=" data:;base64,'<?php $rows['img'] ?>'"> -->
             <?php
             while($rows=mysqli_fetch_assoc($sqimage))
                  {

                echo "<img src = 'Image/".$row['img'].'" />';


                   } ?>

              <?php }

      ?>
      </fieldset>
      </body>
      </html>
               
               

  
