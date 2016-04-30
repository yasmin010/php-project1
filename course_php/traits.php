<!DOCTYPE html>
<html>
<head>
<title> traits </title>
<meta charset="utf-8">
</head>
<body>
    <?php
       trait Test{

	     public function hello(){

	     	echo "Hello from trait";
	}
	public function saywelcome(){
		ehco "welcome to our website";
	}

	abstract function bodyy();
	public static function groupwelcome(){
		echo "hello static method ";
	}
}
     trait test2{
     	public function hello(){
     		echo "welcome from trait2";
     	}
     }
     class parentclass{
     	 public function hello(){

	     	echo "Hello from parentclass";
	}
     }

     class childclass extends parentclass{
     	use test ,test2{
     		test::hello insteadof test2;
     		//test2::hello as welcome;
     	}

     	public function bodyy(){
     		echo "hello all";
     	}
     	public function callwelcome(){
     		$this->saywelcome();
     	}
     	 public function hello(){

	     	echo "Hello from the childclass";
	}
     }
     (new childclass())->hello();
     childclass::groupwelcome();
?>
</body>
</html>