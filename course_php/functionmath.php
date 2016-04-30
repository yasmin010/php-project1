<!DOCTYPE html>
<html>
<head>
<title> math function</title>
<meta href="utf-8">
<style>
</style>
</head>
<body>

	<?php
 
        class employee{
        	public $name;
        	public $age;
        	public $address;
        	public $salary =1500;
        	public $tax;
        	public $overtime;
        	public $overtimerate;

        	public function calc(){
         	return $this->overtime * $this->overtimerate;

         }

         public function calcsalary(){
         	return $this->tax * $this->salary;
         }


        }

        $ahmed =new employee();
        $ahmed->name ='ahmed mohamed';
         $ahmed->age =22;
         $ahmed->address ='cairo';
         $ahmed->salary =2000;
         $ahmed->tax =75;
         $ahmed->overtime =20;
         $ahmed->overtimerate =15;


         $mohamed =new employee();
         $mohamed->name ='mohamed yehia';
         $mohamed->age =31;
         $mohamed->address ="alex";
         $mohamed->salary =1500;
         $mohamed->tax =20;
         $mohamed->overtime =30;
         $mohamed->overtimerate =20;

         echo '<p>' .$ahmed->name .' has overtime of ' .$ahmed->calc() .' L.E' .'</p>';
         echo '<p>' .$ahmed->name .' has salary of ' .$ahmed->calcsalary() .' L.E' .'</p>';
         echo '<p>' .$mohamed->name .' has overtime of ' .$mohamed->calc() .' L.E' .'</p>'; 
        
	?>
</body>
</html>