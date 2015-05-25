<?php 

	$id = $_GET['id'];
	$korisnici = array(
		1 => array(
			'name' => 'John',
			'lastname' => 'Lennon',
			'description' => 'killed'
		),
		2 => array(
			'name' => 'Ringo',
			'lastname' => 'Starr',
			'description' => 'still alive'
		),
		3 => array(
			'name' => 'Paul',
			'lastname' => 'McCartney',
			'description' => 'still alive'
		),
		4 => array(
			'name' => 'George',
			'lastname' => 'Harrison',
			'description' => 'died 2001'
		)
	);


	//echo $korisnici[3]['name'];

 ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	body {
		background-color: orange;
	}

	ul {
		padding: 20px;
		background-color: white;
	}
	</style>
</head>
<body>
	<ul>

	<?php 

	foreach ($korisnici as $key=>$korisnik) {
		
		?>
		<li><a href="?id=<?php echo $key ?>"><?php echo $korisnik['name'] ?></a></li>

		<?php
	}
	 ?>
		

	</ul>


	<h1><?php echo $korisnici[$id]['name'] . " "  . $korisnici[$id]['lastname'] ?></h1>
	<p>Status: <?php echo $korisnici[$id]['description'] ?></p>
</body>
</html>