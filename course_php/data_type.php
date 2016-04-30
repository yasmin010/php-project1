<?php
// variables

$x = 5;
$x1 ="welcome";
$x2 =2.4;
$cars = array("toyta","bmw","volvo");


var_dump($x);
var_dump($x1);
var_dump($x2);
var_dump($cars);


// object 
class Car {
	function Car(){

		$this->model = "VM";
	}
}

// object
$herbie = new Car();

// display object
echo $herbie->model ;
echo "<br>";

echo " <h2> strings </h2>";
echo "return string length using strlen : ". strlen("hello world! ");
echo "<br>";
echo "rturn #of words in string using str_word_count : " . str_word_count("hello yasmin");
echo "<br>";
echo "return reverse of string using strrev :" .strrev("welcome in php");
echo "<br>";
echo "return postion of word in astring using strpos : " .strpos("hello yasmin","yasmin");
echo "<br>";
echo "replace yasmin with php using str_replace : " .str_replace("yasmin", "php", "hello yasmin ");

echo "<br>";

echo "<h2> constant </h2>";

define("Greating", "Welcome to w3school", true );
// constant is global
function test(){
	echo Greating;

}

test();

$x =5;
$y =6;
echo "<br>";
echo $x % $y;
?>