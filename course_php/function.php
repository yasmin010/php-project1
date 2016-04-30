<?php
// function with arguments 
function familyname($fname ,$year){

  echo " $fname is born in $year<br>";

	
}

familyname("said","1995");
familyname("ahmed","1877");
familyname("mohamed","1789");


// default function
echo "<h2> default value of function </h2>" ;
function setHeight($minheight = 50){
	echo "the height is : $minheight <br>";

}

setHeight(350);
setHeight(213);
setHeight();
setHeight(90);

// return function
echo "<h2> return value of function we use return </h2>" ;
function sum($x ,$y){
	$z = $x + $y;
	return $z;
}
echo "5 + 10 =" .sum(5,10) ."<br>";

