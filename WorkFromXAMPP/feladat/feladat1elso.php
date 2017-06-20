<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hu" lang="hu">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>feladat</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

<?php

if(isset($_POST['submit'])) {

$egy = $_POST['elso'];
$ketto = $_POST['masodik'];

?>

<form id="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Első paraméter:<br/>
<input type="text" name="elso" id="elso" value=""/>
<p>Második paraméter:<br/>
<input type="text" name="masodik" id="masodik" value=""/>
<p>Eredmény:<br/>
<textarea name="eredmeny" id="eredmeny" readonly="yes" cols="100" rows="20" value="majom"><?php include 'for.php';?></textarea></br>

<input type="submit" value="Futtatás" name="submit"/>

<?php

}

else{
?>

<form id="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Első paraméter:<br/>
<input type="text" name="elso" id="elso" value=""/>
<p>Második paraméter:<br/>
<input type="text" name="masodik" id="masodik" value=""/>
<p>Eredmény:<br/>
<textarea name="eredmeny" id="eredmeny" readonly="yes" cols="100" rows="20"></textarea></br>

<input type="submit" value="Futtatás" name="submit"/>
</body>

<?php
}
?>