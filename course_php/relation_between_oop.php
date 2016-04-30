<!DOCTYPE html>
<html lan="EN">
<header>
	<title> Relation betwwen objects on oop </title>
	<meta charset="utf-8">

</header>
<style>
</style>
<body>
	<?php
	#assosiation 
	#aggregation
	#composition
	class trainer{
		public $name;
		public $salary;
		public $age;
		publi $rate;

		public function isgoodtrainer(){

		}

	}
    class webdevolopmenttrainer extends trainer{
    	public function isthetrainerqualified(){

    	}

    	public function addbok(book $book){

    	}

    	public function paysalary(){
    		if($this->rate == true){
    			echo "you have your salary this month";
    		}
    	}

    }

    class book{

    	public $title;
    	public $auther;
    	public $isbn;
    	public function canborrow(){
    		

    	}

    	public static function isborrow(trainer $trainer){
    		return $trainer->name;

    	}
    
    }
    class trainingprogram{
    	public $title;
    	public $studentlist;
    	public $trainer;

    	public function showstudentlist(){
    		return $this->studentlist;
    	}

    	public function addstudent(student $student){
    		$this->studentlist[] =$student;
    	}
    	public function istrainergood(){
    		$trainer->rate = true;
    	}
    }
    class student{
    	public $name;
    	public $age;
    }
	?>
</body>
</html>