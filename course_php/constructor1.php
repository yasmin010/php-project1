<!DOCTYPE html>
<html lang="EN">
<head>
	<title> Constructor& deconstructor </title>
	<meta charset="utf-8">
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

	    public function __construct(){
	    	$this->minscore =125;

	    }

	    public function getminscore(){
	    	return $this->minscore;
	    }

	}

    class gradestudent extend Student{
    	
    }
	$ali = new Student();
	echo $ali->getminscore();

	?>
</body>
</html>