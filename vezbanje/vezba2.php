<?php 

	$a = Array('1','2','3','4');
	$b = Array('x','y','z');

	// $c = Array('1','2','3','4','x','y','z');

	// Napraviti niz $c od nizova $a i $b. Ne mora da se ispisuje na ekranu

	$c = Array();

	//$c = $a;
	foreach ($a as $el) {
		array_push($c, $el);
	};
	foreach ($b as $el ) {
		array_push($c, $el);
	}
	var_dump($c);


 ?>