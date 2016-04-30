<?php
namespace Main\utilities;
include 'exist.php';
class A{

	public function __construct(){
		echo "i am in name space";
	}

}

 function saywelcome(){
	echo 'hello my dear friends';
}

$a =new A;
\Main\utilities\action\saywelcome();


?>