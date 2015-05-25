<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 


/* 
* Ova funkcija mi skracuje tekst na x karaktera i vraca skracen tekst
*/

function trim_teksta($tekst, $br_slova = 50) {
 	$pozicija = strpos($tekst, " ", $br_slova);
	$dodatak = (strlen($tekst) <= $br_slova) ? "" : "...";
	if($pozicija) {
		$tekst = substr($tekst, 0, $pozicija);
	} else {
		$tekst = substr($tekst, 0);
	}
	$tekst .=  $dodatak;
	return $tekst;
}



$pera = 10;
$zika = 20;


$kolicnik = 20;

echo add($pera, $zika);

function add($br1, $br2) {
	global $kolicnik;

	$total = $br1 + $br2 * $kolicnik;
	return $total;
}
























// $t = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi porro sapiente molestiae. Aliquid ut culpa consequuntur voluptatum minima, distinctio iusto, accusantium quasi cupiditate non consectetur hic. Eaque beatae repellat iste.";

// $novi = trim_teksta($t, 80);

// echo $novi;





?>
</body>
</html>




