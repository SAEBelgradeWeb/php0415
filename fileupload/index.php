<pre><?php 


if (isset($_FILES['slika'])) {

	$dir = getcwd();
	$novo_ime = str_replace(" ", "_", $_FILES['slika']['name']);
	$novo_ime = time() . "_" . $novo_ime;
	$stara_putanja = $_FILES['slika']['tmp_name'];
	$nova_putanja = $dir . '/storage/' . $novo_ime;

	move_uploaded_file($stara_putanja, $nova_putanja);
}


 ?><!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	

	<form action="" method="POST" enctype="multipart/form-data">
		Unesi ime: <input type="text" name="ime">
		<br>


		Upload image<input type="file" name="slika">

		<br>
		<button>Submit</button>

	</form>

 </body>
 </html>