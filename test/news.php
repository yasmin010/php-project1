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
       if (!$record) {
            
           echo "error";
       }
       ?>
        <?php 

        while(($rows = mysql_fetch_array($record))) { 
        	?>
        	<fieldset class="newss">
             
             <details>
              <summary>
            <a href="#"><?php echo $rows['address'] ?><a>
              <img width="175" height="200" src=" data:;base64,'<?php $rows['img'] ?>'">
              </summary>
              <?php echo "date : " .date("Y.m.d") .date("h:i:sa"); ?>
           <br>
          <p> <?php echo $rows['comment']; ?></p>
            </details>

              
               </fieldset>


              <?php }
      ?>
      </body>
      </html>
               
               

  
