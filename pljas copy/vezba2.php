<?php 

	$brojevi = Array(3,5,-4,7,2,1,10,5,3);

	function nas_maksimum($niz_brojeva){

		$max = $niz_brojeva[0];
		foreach ($niz_brojeva as $broj) {
		 	if ($max < $broj){
		 		$max = $broj;
		 	}
		}
		return $max;
	}

	echo nas_maksimum($brojevi);
	echo '<br>';
	echo nas_maksimum(Array(3,46,53,24325,3512246,1124,6));
	echo '<br>';
	echo nas_maksimum(Array(0,2345,235,2356,24524));
	echo '<br>';
	echo '<br>';
	echo '<br>';
 ?>