<?php
// global variabl
$x = 5;
$y = 7;

function mytest(){
	// local variable 
	global $y;
    
	$x1 = 10;

$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y']  ;


    // static variable
	static $x2 = 0;
	$x2++;
    echo "$x2";

	

//echo "<p> variable x inside function is : $x1</p>";
//echo "<p> variable y inside function is : $y</p>";




}

mytest();
mytest();
mytest();

//echo "<p> variable x outside function is : $x</p>" ;
echo "<p> the output of GLOBALS is : $y";

?>