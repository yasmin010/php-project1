<html>
<body>
<form method="post" action="<?php echo $_server['PHP_SELF'];?>">
	name: <input type="text" name= "fname">
	<input type="submit">
</form>


<?php
$x = 75;
$y = 25;

function add(){
	$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

add();

echo "<h2> globals </h2> <br>";
echo " value of z is " .$z;


echo "<h2> $-server  hold info about header,path and script location .";
 
 echo $_SERVER['PHP_SELF'];
 echo "<br>";
 echo $_SERVER['SERVER_NAME'];
 echo "<br>";
 echo $_SERVER['HTTP_HOST'];
 echo "<br>";
 //echo $_SERVER['HTTP_REFERER'];
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>
</body>
</html>




