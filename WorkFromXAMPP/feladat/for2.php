<?php 
if(isset($_POST['submit'])) {
$a=$egy;  //minek keressük a hatványát avagy mit akarunk hatványozni
$b=$a;

	for ($i=1; $i<$ketto; $i++) {
	$a=$a*$b;

	}
	
	echo $a . "\n";

}


/*
2 1  2
2 2  4
2 3  8
2 4  16
2 5  32
2 6  64
2 7  128
2 8  256
2 9  512
2 10 1024
*/

?>


