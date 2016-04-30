<!DOCTYPE html>
<html>
<head>
	<meta href="utf-8">
	<title> For Each Loop</title>
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

}</style>
</head>
<body>

	<table>
		<tr>
			<th>Employee_Name</th>
			<th>Salary</th>
		</tr>
	
	<?php
	$employee =array('Mohamed ' => 1000,
		              'Ahmed' => 200,
		              'Osama' => 800);

	$yy =array("ahmed mohamed ", 30 ,50 ,69);

	#foreach ($employee as $item ) {
	#	echo $item;
	#}

	foreach ($employee as $name => $salary) {

		echo '<tr>
		      <td>'. $name .'</td>
		     <td>' .$salary .'</tdr>
		     </tr>';
	}

	foreach ($yy as $key => $value) {
	echo '<tr>
		     <td>' .$value .'</td>
		     </tr>';
	}


	?>

	</table>
</body>
</html>