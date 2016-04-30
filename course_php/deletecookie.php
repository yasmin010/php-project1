<?php
//set expire date to one hour 
setcookie("user" ,"test" ,time() + 3600 ,"/");
?>
<html>
<body>
<?php
//echo "Cookie 'user' is deleted.";

// cookie enable 
if(count($_COOKIE) > 0){
echo "Cookie are enabled.";
} else{
	echo "Cookie are disabled.";
}
?>
</body>
</html>