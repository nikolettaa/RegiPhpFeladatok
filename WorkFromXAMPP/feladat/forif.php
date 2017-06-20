<?php
$a=2;  //minek keressük a hatványát avagy mit akarunk hatványozni
$b=$a;	


	for ($i=1; $i<25; $i++) {
	$a=$a*$b;

	/*		if($i==8-1) {
		echo $a . "\n";
				
	}
		
			if($i==16-1) {
		echo $a . "\n";
				
	}
		
			if($i==24-1) {
		echo $a . "\n";
				
	}*/
		if($i%(8-1)==0) {	echo $a . "\n";	}

	}
	/*
		3/2=1

	**/
	?>
	
	
	