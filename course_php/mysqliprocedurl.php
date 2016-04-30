<?php
$servername ="localhost";
$username ="root";
$password ="";

$conn = mysqli_connect($servername,$username,$password);
if (!$conn){
	die("connection faild :" .mysqli_connect_erorr());
}
echo "connected successfully";

// close connection
mysqli_close($conn);

?>
