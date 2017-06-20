<?php

class User {

private $user_id;
private $name;
private $age;
private $birthday;
private $sex;
private $password;	
 

public function __construct() {
    $this->user_id = "";
	$this->name = "";
	$this->age = 0;
	$this->birthday = "";
	$this->sex = "";
	$this->password = "";
	}
	
public function setAll($value, $value2, $valuse3, $value4, $valuse5, $value6) {
	$this->user_id = $value;
	$this->name = $value2;
	$this->age = $value3;
	$this->birthday = $value4;
	$this->sex = $value5;
	$this->password = $value6;
}

public function echoAll() {
	echo $this->user_id;
	echo $this->name;
	echo $this->age;
	echo $this->birthday;
	echo $this->sex;
	echo $this->password;
}






?>