<?php
$servername ="localhost";
$username ="root";
$password ="";

$dbname ="myDB";
$conn = new mysql($servername, $username, $password, $dbname);
if($conn->connect_erorr){
	die("connection faild: " .$conn->connect_erorr);
}
//TO CREATE TABLE 
$sql ="CREATE TABLE Guest(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP)";

if($conn->query($sql) == true){
	echo "Table guest created successfuly";
}
else{
	echo "Erorr creating table :" .$conn->erorr;
}
$conn->close();
?>