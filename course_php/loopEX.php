<!DOCTYPE html>
<html lang="en">
<title> loops ex</title>
<meta href="utf-8">
<style>

table{
border-collapse: collapse;
}


table tr th ,table tr td{
	border: 2px solid;
	padding:5px;
	text-align: left;
}
table tr th{
	background: #666;
	color: #fff;

}

table tr:nth-child(2n){
	background: #e4e4e4;
}
</style>

<body>

	<table>
		<tr>
			<th>Name</th>
			<th>Salary</th>
		</tr>
	

	<?php
	$names = array("yasmin", "mona", "amany", "hend", "nour", "malk", "hager");

	$salaries = array(1000, 2000, 3000, 1200, 800, 1000);
	
	$salaries[] =200;

	$size = sizeof($salaries);

	$sum = 0;
	$addsalary = 0;
	for ($i=0; $i < $size; $i++) { 

	echo "<tr> <th>" .$names[$i] ." </th> "
	       ."<th>" .$salaries[$i] ."</th>" ."</tr>" ."<br>";
	$sum += $salaries[$i] ;

	//  add 10% of salary
	$addsalary = $salaries[$i] + ($salaries[$i] * .1);
     //echo "Employee NO " .$i ." 10% of salary is " .$addsalary ."<br>";
	}
	echo "sum is " .$sum ."<br>";
	?>
	</table>

	
</body>

</html>