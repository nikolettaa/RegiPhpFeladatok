<?php

require_once('new.php');

$peldany = new User();
$peldany->setAll(01, "xy", 23, 1993-12-29, 0, "root");
$peldany->echoAll();

?>