<?php
//while
$x = 1;
$y = 2;
echo "<h2>  while </h2> ";
while($x <= 5){
	echo "the value of x is :  .$x <br>";
$x++;

}

// do while
echo "<h2> do while </h2> ";
do{
	echo "welcome to php $y <br>";
	$y++;
}
while( $y <= 5);

echo "<h2> do while executed at least one before condition is checked </h2> ";
$x1 = 6;

do {
    echo "The number is: $x1 <br>";
    $x1++;
} 
while ($x1<=5);

//for loop
echo "<h2> for loop </h2> <br>";
for($xx = 1; $xx <= 6; $xx++){
	echo "the value of xx is $xx <br>";
}

// for each loop deal with loops only 
echo "<h2> for loop </h2> <br>";
$colors = array("red", "grean" ,"bule");
foreach ($colors as $value) {
	echo "$value <br>";
}


