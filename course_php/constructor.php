<!DOCTYPE html>
<html lang="EN">
<head>
	<title> Constructor& deconstructor </title>
	<meta href="utf-8">
	<style>
	</style>
</head>
<body>
	<?php
	class Student{

		public $name;
		public $age;
		public $level;
		public $score;
	    public $subject = array(
	    	'Arabic' =>0, 'English' =>0,
	    	'Math' =>0, 'Science' =>0 );
	    public $minscore =150;
	    public $maxscore =300;

	    public function __construct($name, $age){
	    	$this->name = $name;
	    	if($age > 12){
	    		 $this->age = $age;
	    	}
	    	else{
	    		throw new Exception("Sorry age is less than 12 ");
	    		
	    	}

	    }

	    public function welcomestudent(){
	    	echo "welcome to our class " .$this->name;
	    }

	    public function setlevel($level){
	    	$level = abs(filter_var($level, FILTER_SANITIZE_NUMBER_INT));
	         if ($level <1 || $level >12) {
	         	throw new Exception("Sorry level mustbe between 1 and 12");
	         	
	         }
	        # else{

	        # $this->$level = $level;
	    #}

	    public function getlevel(){

	    	return $this->level;
	   }


	    public function setname($name){

	    	$this->name =$this->filtername($name);
	    }

	    private function filtername($name){
	    	return ucwords(substr($name, 0, 12));
	    }

	}

	$mohamed =new Student('mohamed', 42);
	//$ahmed = new Student('ahmed', 23);
	$mohamed->welcomestudent();
    $mohamed->setlevel('mohamed');
    echo $mohamed->getlevel();

	



	?>
</body>
</html>