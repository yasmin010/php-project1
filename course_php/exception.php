<?php
//create function with an exception
function checkNum($number) {
  if($number>1) {
    throw new Exception("Value must be 1 or below");
  }
  return true;
}

//trigger exception
//checkNum(2);
// trigger exception in a "try" block
try{
	checkNum(2);
	// if exception is throw this text will not shown
	echo "if you see this , the number is 1 or below ";
}

catch(Exception $e){
	echo "message: " .$e->getmessage();
}

?>