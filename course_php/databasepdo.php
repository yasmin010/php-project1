<?php
$servername= "localhost";
$username ="root";
try{
$conn = new PDO("mysql:host=$servername;dbname=myDB".$username);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo"connected successfuly";
}
catch(PDOException $e){
	echo "connection faild:" .$e->getMessage();
}

$conn =null;
?>