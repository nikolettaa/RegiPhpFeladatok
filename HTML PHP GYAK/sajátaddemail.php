<?php
$dbc=mysqli_connect('localhost', 'root', '', 'email_list')
	or die('Error connecting to MySQL server.');
	
$first_name= $_POST['firstname'];
$last_name= $_POST['lastname'];
$email= $_POST['email'];

$query=	"INSERT INTO email_list	(first_name, last_name, email)"
		"VALUES('$first_name', '$last_name', '$email')";
	
mysqli_query($dbc, $qery)
	or die('Error querying database.');
	
echo 'Costumer added.';

mysqli_close($dbc);

?>