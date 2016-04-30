<!DOCTYPE HTML>
<html>
<body>

    <?php
    echo "Today is : " .date("d/m/Y") ."<br>";
    echo "Today is : " .date("Y.m.d") ."<br>";
    echo "Today is : " .date("Y-m-d") ."<br>";
    echo "Today is : " .date("l") ."<br>";
    echo "The time is : " .date("h:i:sa") ."<br>";
    // time zone 
    //echo "<h1> time zone use date_default_timezone_set("America/New_York")</h1><br>"
    date_default_timezone_set("America/New_York");
    echo "The time is : " .date("h:i:sa") ."<br>";

    // mktime(h,m,s,month,d,y) function calculate time from 1 jan 1970
    $d =mktime(11, 14, 54 , 8, 12, 2014);
    echo "Created date is : " .date("Y-m-d h:i:sa" , $d) ."<br>";
    // strtotime function used to convert string to time unix
    $d1 =strtotime("10:30pm april 15 2014");
    echo "Created date is : " .date("Y-m-d h:i:sa" ,$d1) ."<br>";
    
    $d2 =strtotime("tomorrow");
    echo "Created date is : " .date("Y-m-d h:i:sa" ,$d2) ."<br>";


   echo "<h1> startdate lessthan enddate </h1><br>";
   $startdate =strtotime("Saturday");
   $enddate =strtotime("+6 weeks",$startdate);

   while ($startdate < $enddate) {

     echo date("M d" , $startdate) ,"<br>";
     $startdate = strtotime("+1 week",$startdate);
   }
    ?>
    <br>
    &copy; 2010-<?php 
    //  use to update year to your page use &copy;
    echo  date("Y");?>
</body>
</html>