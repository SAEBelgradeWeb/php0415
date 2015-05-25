<?php 


$mesec = date('F', time());

if($mesec == "April") {
	$boja = "yellow";
} else {
	$boja = "blue";
}


//$boja = ($mesec == "April") ? "yellow" : "blue"; 


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body style="background-color: <?php echo $boja ?>">

	<?php 
	if($mesec == "April"):
	 ?>
	
	<h1>April je u Beogradu, jupiii!</h1>
	<img src="http://upload.wikimedia.org/wikipedia/commons/9/92/Colorful_spring_garden.jpg" alt="">
	<?php 
	else:

	?>
	<h1>Nije jos april, jbg</h1>
	<img src="http://upload.wikimedia.org/wikipedia/commons/d/d6/CathedralofLearningLawinWinter.jpg" alt="">
	<?php endif; ?>
</body>
</html>