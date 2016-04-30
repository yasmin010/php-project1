<!DOCTYPE HTML>
<html>
<body>
  
  <div class="menu">
  <?php
      include 'menu.php';

  ?>
  </div>
  <h1>Welcom to my page! </h1>
  <p>Some text.</p>
  <p>More text.</p>

  <?php
  // echo readfile("webdictionary.txt");

 $myfile = fopen("webdictionary.txt", "w") or die("Unable to open file!");
$txt = "john doe \n";
fwrite($myfile, $txt);
$txt = "jahn doe \n";
fwrite($myfile, $txt);
fclose($myfile);
?>
</body>
</html>