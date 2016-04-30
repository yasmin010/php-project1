<!DOCTYPE html>
<html lang="EN">
<head>
	<title> EX1 with foreach</title>
	<style>
able{
	border-collapse: collapse;
}
table tr th, table tr td{
	border:2px solid #666;
	padding:5px;


}

table tr th{
	background: #999;
	color:  #fff ;

}

table{
	border-collapse: collapse;
}

table tr:hover{
	background: yellow;
}

table tr:nth-child(2n){
	background: #e4e4e4;
}

table tr td span.green{
	color: green;
	font-weight: bold;

}

table tr td span.red{
	color: red;
	font-weight: bold;

}
table tr th[data-class-name]{
  background: #999;

}

table tr th[data-class-name]{
 border-bottom: solid 2px #fff;

}
	</style>
</head>
<body>

	 <?php 
     
      $class1 =	array("ahmed mohamed ", 30 ,50 ,69);
      $class11 = array("ahmed mohamed ", 30 ,50 ,69);
      $class12 =array("amged ahmed ", 4 ,8 ,9);
      $class13 = array("anwer mohamed ", 30 ,85 ,69);
        //array("mawan ahmed ", 30 ,33 ,79);
        //array("hossam ahmed ", 32 ,2 ,69)
      	//);

       $class2=array(
      	array("mona mohamed ", 30 ,50 ,69),
        array("mayar ahmed ", 6 ,40 ,9),
        array("magda khalid ", 32 ,44 ,79),
        array("maysa anwer ", 39 ,22 ,77),
        array("noga ahmed ", 11 , 0 ,9)
      	);
       $school =array($class1, $class2);
 ?>
	<table>
		<tr><span  </tr>
		<tr>
			<th>Student Name</th>
			<th>Arabic</th>
			<th>English</th>
			<th>Math</th>
			<th>Total</th>
			<th>Percentage</th>
			<th>Status</th>

		</tr>


<?php
foreach ($class1 as $key => $value) {
	echo '<tr>
		     <td>' .$value .'</td>
		     </tr>';
	}


	foreach ($class11 as $key1 => $value1) {
	echo '<tr>
		     <td>' .$value1 .'</td>
		     </tr>';
	}
?>
	</table>
</body>
</html>