<!DOCTYPE html>
<html lang="EN">
<head>
<title> student grade</title>
<meta href="utf-8">
<style>




table tr th ,table tr td{
	border: 2px solid #999;
	padding:5px;
	text-align: left;
}
table tr th{
	background: #666;
	color: #fff;

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


</style>
</head>
<body>


	<table>
		<tr>
			<th>Name</th>
			<th>GR_EN</th>
			<th>GR_AR</th>
			<th>GR_Math</th>
			<th>TOTAL</th>
			<th>Status</th>

		</tr>
	<?php
	$Names =array("ahmed", "amgad", "mohamed", "yasmin", "mona", "amany");
	$GR_EN = array(90, 9, 76, 66, 89, 86);
	$GR_AR =array(77, 8, 47, 87, 55, 79);
	$GR_Math =array(55, 8, 59, 97, 66, 88);
	$student =array($Names, $GR_EN, $GR_AR ,$GR_Math);


	$total =0;
	$avg =0;
	$len =sizeof($Names);
	$len2 =sizeof($student);
	$numsuccess =0;
	$numfalid =0;

	for ($i=0; $i <$len ; $i++) { 

		$total =($GR_EN[$i] + $GR_AR[$i] +$GR_Math[$i]);

	    $state = ($total <= 100) ? 'red' :'green';
	    $Status = ($total <= 100) ? 'Faild' :'Success';
	    
	    if ($total > 100) {
	    	$numsuccess++;
	    }

	    else{
	    	$numfalid++;
	    }


	    echo "<tr> 
		<td> $Names[$i] </td> 
		<td> $GR_EN[$i] </td>
		<td> $GR_AR[$i] </td>
		<td> $GR_Math[$i] </td>
		<td>$total</td>
		<td><span class=\"{$state}\">$Status</span></td>
		
		</tr>";
      
	}
	?>
	<tr>
		<th colspan="7"> This class is <?php echo ($numsuccess >= $numfalid) ? 'Good' :'Faild';?></th></tr>

	</table>

</body>

</html>