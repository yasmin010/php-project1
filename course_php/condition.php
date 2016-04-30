<?php

$t = date("H");
$favcolor= "red";


// if... elseif ....else 
echo "<h2> if statment  </h2>";
echo "<br>";
if($t < "10"){
	echo "Have a good morning! ";
	echo $t;
}

elseif ($t == "20" )
{
	echo "have agood day!";
}
else
{
   echo "have agood night!";
}

echo "<br>";
echo "<h2> switch case </h2>";
//switch case
switch($favcolor)
{
	case 'blue':

		echo "your favorite color is blue";
		break;

	case 'grean':
		echo "your favorite color is grean";
		break;
	case 'red':
		echo "your favorite color is red";
		break;
	default:
	echo "your favorite color is nigther red,blue nor grean";
}

?>