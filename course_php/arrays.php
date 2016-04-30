<?php

// array 1) indexed array
$cars= array("toyota" , "bmw" ," volove");
$length_array = count($cars);

echo "i like " . $cars[0] . "," . $cars[1] . "," . $cars[2] ;

// to get length of array use count 
echo "<h2> length of array use count() </h2> <br>";
echo "length of array is " .$length_array ,"<br>";

//loop in indexed array 
 for($x = 0; $x <  $length_array; $x++) {
     echo $cars[$x];
     echo "<br>";
}

// associative array
$age = array("peter" => "35" , "ben" => "37" ,"joe" => "40");
 $len = count($age);

foreach($age as $y => $y_value ){

	echo $y . "," . $y_value;
 echo "<br>";
}


 ?>
