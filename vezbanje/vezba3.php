<?php 

	// 1. Od unetog niza brojeva, ispisati samo brojeve koji su parni

	$niz = array(13,41,6,7,12,0,5,68);

	foreach ($niz as $broj) {
		if ($broj % 2 == 0){
			echo "$broj ";
		}
	}
	echo "<br>";
	$N = 8;

	$nule = "";
	for ($i=1;$i<=$N;$i++){
		$nule= $nule.'0';
		echo "$nule<br>";
	}
	for ($i=$N-1;$i>0;$i--){
		$nule= substr($nule,1,$i);

		echo "$nule<br>";
	}
	// 2. Ispisati na ekranu ovakvu semu uz pomoc petlji, za zadati broj N, primer ispod je za N=5 

	// 0
	// 00
	// 000
	// 0000
	// 00000
	// 0000
	// 000
	// 00
	// 0
?>