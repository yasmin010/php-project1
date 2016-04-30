<!DOCTYPE html>
<html>
<head>
<title> abstract class and interfaces  </title>
<meta charset="utf-8">
</head>
<style>
</style>
<body>
	<?php
	abstract class employee{
		public $firstname;
		public $lastname;
		public $age;
		public $salary;
		public $address;
		public $tax;
		public $overtime;
		public $overtimerate;
		public $absent;
		public $absentrate;


		public function getovertime(){
			return $this->overtime * $this->overtimerate;
		}

		public function getabsent(){
			return $this->absent * $this->absentrate;
		}

		public function getsalary(){
			return $this->salary * ($this->salary * $this->tax);
		}

		abstract public function showtotalsalary();
		

		abstract public function showname();



	}

	interface employeeinterface{
		public function showaddress($address);
	}

	class manger extends employee implements employeeinterface{


		public $numberofaudits;

		public function showtotalsalary(){
			return $this->getsalary() + $this->getovertime() - $this->getabsent() +$this->numberofaudits * 100;
		}

		public function showadreess($address){
			return $this->address;
		}
		public function showname(){
			return 'welcome manger, ' .$this->lastname.', ' .$this->firstname;
		}

	}
	class supervisor extends employee {
		public $successfulprojet;
		

		public function showtotalsalary(){
			return $this->getsalary() + $this->getovertime() - $this->getabsent() +$this->successfulprojet * 100;
		}

		public function showname(){
			return 'welcome supervisor, ' .$this->lastname.', ' .$this->firstname;
		}


	}
	class worker extends employee{
		public $bouns = 100;

		public function showtotalsalary(){
			return $this->getsalary() + $this->getovertime() - $this->getabsent() +$this->bouns * 100;
		}
		public function showname(){
			return 'welcome worker, ' .$this->lastname.', ' .$this->firstname;
		}


	}

	$mohamed = new worker();
	$mohamed->salary =5000;
	$mohamed->tax =.01;
	$mohamed->overtime = 30;
	$mohamed->overtimerate =15;
	$mohamed->absent = 2;
	$mohamed->absentrate =75;
	$mohamed->numberofaudits =10;
	echo $mohamed->getovertime();
	echo $mohamed->showname();


	?>
</body>
</html>
