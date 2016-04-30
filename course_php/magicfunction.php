<?php
class student{

	public $name;
	private $data = array();

	public function __set($name,$value){
		$this->data[$name] = $value;
	//	echo "this function has been called";
		$this->$name =$value;

	}

	public function __get($key){
		if(isset($this->$key)){
		return $this->data[$key];
	}
	else{
		trigger_error("sorry no key " .$key ."found in this data array");

	}

	}
	public function __isset($name){
		
      if(array_key_exists($name, $this->data)){
      	echo "key i found and is being extract.";
		return true;
	}
	else{
		return false;
	}
	}

	public function __unset($name){
		if (isset($this->$name)) {

			unset($this->data[$name]);
		}

	}
	public function __call($name, $arguments){
		if(method_exists($this, $name)){
			$this->name($arguments);
		}
		else{
			trigger_error('Sorry no method ' .$name .'has been found',E_USER_ERROR);
		}
	
	}

	public static function __callstatic($name, $arguments){
		echo " A call to static method " .$name ." occured";
	}

	private function saywelcome(){
		echo "welcome to our class";
	}
	
}

    $mohamed = new student();
    student::sayhello();
	

	



?>