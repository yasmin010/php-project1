<?php

$name = array("yasmin" , "mona" ,"ahmed" ,"mohamed");
// asceding sort 
sort($name) ;  
// desceding soting
// rsort($name);

$len_asceding = count($name);


echo "<h2> sorting names asceding </h2> <br> ";
for ($x = 0; $x < $len_asceding; $x++){
	echo $name[$x] ."<br>";

}

$num = array(12 , 23 ,6 ,7);
sort($num);
$len_num = count($num);

echo " <h2> numbers are <h2> <br>" ;
for($y = 0; $y < $len_num; $y++){
echo $num[$y] ."<br>";
}


// sort array asceding order acording to value 
$age =array("peter" => "35", "ben" => "37" , "joe" => "43");
ksort($age);
$length_age = count($age);

echo "<h2> asceding order acording to value using asort </h2> <br> ";
foreach($age as $yy => $yy_value){
echo "key is " .$yy .",value = " .$yy_value;
echo "<br>";

}





