<pre>
<?php 

function dani_u_nedelji($datum) {
	
	$rezultat = array();
	for ($i=2015; $i< 2026 ; $i++) { 
		$ts = strtotime($datum . $i);
		$date = getdate($ts);

		array_push($rezultat, date('Y - l', $ts));
	}
	return $rezultat;
}


function dani_u_nedelji2($datum) {

	for ($i=2015; $i< 2026 ; $i++) { 
		$ts = strtotime($datum . $i);
		$date = getdate($ts);

		$rezultat[$i] = date('l', $ts);
	}
	return $rezultat;
}



function dani_u_nedelji3($datum, $br_godina) {

	for ($i=0; $i< $br_godina; $i++) { 
		$ts = strtotime($datum . " + $i year");
		$date = getdate($ts);
		$god = date('Y', $ts);
		$rezultat[$god] = date('l', $ts);
	}
	return $rezultat;
}


//KOG DATUMA CE BITI TRECI PONEDELJAK U JANUARU 2016?


$ts = strtotime("1st January 2016 Monday + 2 week");

echo date("d. M Y", $ts);


// $rez = dani_u_nedelji3('1st January 1900', 100);


// var_dump($rez);

// var_dump($date['weekday']);

// echo date('l', $ts);
 ?>