<!DOCTYPE html>
<head>
<title> EX of loops </title>
<meta href="utf-8">
<style>
table{
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
<body>
   <?php 
      $class1 =array(
      	array("ahmed mohamed ", 30 ,50 ,69),
        array("amged ahmed ", 4 ,8 ,9),
        array("anwer mohamed ", 30 ,85 ,69),
        array("mawan ahmed ", 30 ,33 ,79),
        array("hossam ahmed ", 32 ,2 ,69)
      	);

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
$cssclass ='';
$status ='';
$numsuccess =0;
$numfaild =0;
$bestscore =0;
$st =0;

        for ($i=0, $len =sizeof($school); $i <$len ; $i++) { 

        	echo '<tr>
        	<th data-class-name="class1" colspan="7">Class '.($i + 1) .'</th>
            </tr>';
         for ($y=0, $len1 = sizeof($school[$i]); $y < $len1; $y++) { 
         	$total =($school[$i][$y][1] + $school[$i][$y][2] +$school[$i][$y][3]);
         if ($total > $bestscore) {
           $bestscore =$total;
           $st =$y;
         }
         
          $Percentage =($total /150) *100;

          if ($total >=100) {
            $numsuccess++; 
          } else{
            $numfaild++;
          }

            
            $cssclass =($total >= 100) ?'green':'red';
            $status =($total >= 100) ?'Success' :'Faild';
         	echo '<tr>
         	       <td>' . $school[$i][$y][0] . '</td>
         	       <td>' . $school[$i][$y][1] . '</td>
         	       <td>' . $school[$i][$y][2] . '</td>
         	       <td>' . $school[$i][$y][3] . '</td>
         	       <td>' . $total . '</td>
         	       <td>' . round($Percentage,2) ."%" .'</td>
         	       <td><span class="'.$cssclass .'">'.$status .'</span></td>
         	</tr>';
         }
         echo '<tr>
          <th data-best-score="class2" colspan="7">Bestscore of student is  '.$school[$i][$st][0] .'(' .$bestscore .')</th>
            </tr>';
            $bestscore =0;
            $st =0;

        }
?>
	

		

	</table>
</body>
</head>