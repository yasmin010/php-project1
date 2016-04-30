<?php
// start the session 
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// set session variable
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";

echo "Session variable are set. <br>";
echo "Favorite color is " .$_SESSION["favcolor"] .".<br>";
echo "Favorite animal is " .$_SESSION["favanimal"] .".<br>";
print_r($_SESSION);

//to change variable of session, ake overwrite to value 
$_SESSION["favcolor"] ="bink";
echo "<br>";
print_r($_SESSION);
echo "<br>";
// to remove all session variable
session_unset();

// to destory the session 
session_destroy();
print_r($_SESSION);
echo "<br>";
echo "All session variables are now removed, and the session is destroyed.";
?>
</body>
</html>