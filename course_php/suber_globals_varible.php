<?php if (!isset($_GET['yasmin'])) {?>

<form action="">
<label for="username"> username: <input type="text" name="username"></label>
<label for="password"> password: <input type="text" name="password"></label>
<input type="submit" value="login" name="login">
</form>
<?php } else { ?>
<h1> welcome to our website </h1>
<?php } ?>
<?php
$users =array(
	1 => array(

	'firstname'=>"yasmin",'age' =>33),
	2 => array(
		'firstname' =>'ahmed' ,'age' =>22)
);
$user =isset($_GET['user']) ? $_GET['user'] : false;
if ($user !== false) {
	$firstname = (array_key_exists($user, $users))
	? $users[$user]['firstname'] : 'Guest';

		$age = (array_key_exists($user, $users)) ?
		$users[$user]['age'] : 'unknown';



	}
?>
<h1> welcome to our website,<?= $firstname ?> ,
 your age is <?= $age ?></h1>