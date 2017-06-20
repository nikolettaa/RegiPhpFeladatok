<?php

require_once('user.php');

  if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$date = $_POST['date'];
	$password = $_POST['password'];
	$sex = $_POST['sex'];
	$age = 0;
	
	kutyafasza($name, $age, $date, $sex, $password);
	}

$dbc = mysqli_connect('localhost', 'root', '', 'projectdb'); 
$query = "SELECT * FROM users";
$data = mysqli_query($dbc, $query);

 
while ($row = mysqli_fetch_array($data)){
	$peldany2 = new User();
	$peldany2->setAll($row['user_id'], $row['name'], $row['age'], $row['birthday'], $row['sex'], $row['password']);
	$peldany2->echoAll();
	echo '<br />';

}
	mysqli_close($dbc);

function kutyafasza($value2, $value3, $value4, $value5, $value6) {
 $dbc = mysqli_connect('localhost', 'root', '', 'projectdb'); 
 $query = "INSERT INTO users (user_id, name, age, birthday, sex, password) VALUES (null, '$value2', '$value3', '$value4', '$value5', '$value6')";
 $data = mysqli_query($dbc, $query);
 echo mysqli_error($dbc);
 
 mysqli_close($dbc);
}



?>