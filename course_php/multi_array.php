<!DOCTYPE HTML>
<html>
<body>

  <?php 
    $cars =array(array("Volove" ,12,15),
    	         array("BMW" ,22,66),
    	         array("Saab" ,45,6),
    	         array("Land Rover" ,17,13));

    for ($row=0; $row < 4; $row++) {
    	echo "<p><b> Row number $row</b></p>";
    	echo "<ul>";
    for ($col=0; $col < 3 ; $col++) { 
    	echo "<li>" .$cars[$row][$col]. "</li>";
    
     } 
        echo "</ul>";
    }

  ?>
</body>
</html>