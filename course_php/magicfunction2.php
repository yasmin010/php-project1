<?php
$arr =array(1,2,3);

class database{
	public $link;
	public $dns;
	public $username;
	public $password;
	public $querycache;



	public function __construct($dns,$username){

		$this->dsn =$dns;
		$this->link =new PDO($dns, $username);

	}

	public function __sleep(){
		return array('dns', 'username', 'querycache');


	}
	public function __wakeup(){
		$this->link = new PDO($this->dns, $this->username);
	}
}

$obj = new database('mysql://hostname=localhost:dbname=elv','root');
$serialized = serialize($obj);
$obj = unserialize($serialized);
var_dump($obj);


?>