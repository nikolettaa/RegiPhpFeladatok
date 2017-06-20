<?php

class User {

	private $user_id;
	private $name;
	private $age;
	private $birthday;
	private $sex;
	private $password;	
	 

	public function __construct() {
		$this->user_id = 0;
		$this->name = "";
		$this->age = "";
		$this->birthday = "";
		$this->sex = "";
		$this->password = "";
		}
		
	public function setAll($value, $value2, $value3, $value4, $value5, $value6) {
		$this->user_id = $value;
		$this->name = $value2;
		$this->age = $value3;
		$this->birthday = $value4;
		$this->sextotext($value5);
		$this->password = $value6;
	}

	public function echoAll() {
		echo $this->user_id . '<br />';
		echo $this->name . '<br />';
		echo $this->age . '<br />';
		echo $this->birthday . '<br />';
		echo $this->sex . '<br />';
		echo $this->password . '<br />';
	}

	public function sextotext($value) {
		$this->sex = ($value == 0 ? "nő" : "férfi");
	}

}

?>