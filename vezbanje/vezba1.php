<!DOCTYPE html>
<html>
<head>
	<title>Resneje</title>
	<style type="text/css">li{background-color:red;color: white;}</style>
</head>
<body>
<ul>
<?php 

	$niz = Array('HTML','CSS','JavaScript','AngularJS','jQuery','Bootstrap','MySQL','foundation','ReactJS','Unity');
 
 // 	$sve = "";
	// foreach ($niz as $element) {
	// 	// echo "sve=$sve<br>";
	// 	// echo "element=$element<br>";
	// 	$sve = '<li>'.$element.'</li> '.$sve;
	// 	// echo "NOVO sve=$sve<br>";
	// 	// echo '---------------<br>';
	// }
	// echo $sve;
 
	for ($i=count($niz)-1; $i >= 0 ; $i--) { 
		echo "<li>".$niz[$i]."</li>";
	}
 ?>

</ul>
</body>
</html>