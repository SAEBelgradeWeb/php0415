<?php

require_once('db.php');
require_once('header.php');

if (isset($_POST['naziv']) && isset($_POST['opis']) && isset($_POST['kategorija']) 
	&& $_POST['naziv']!="" && $_POST['opis']!="" && $_POST['kategorija']!=""){

	$naziv = mysql_real_escape_string($_POST['naziv']);
	$opis = mysql_real_escape_string($_POST['opis']);
	$kategorija = mysql_real_escape_string($_POST['kategorija']);

	$query = "INSERT INTO proizvodi(naziv,opis,kategorija) VALUES ('$naziv','$opis','$kategorija');";

	$status = mysql_query($query);

	if ($status){
		echo '<p class="success">Proizvod uspesno unet</p>';
	}else{
		echo '<p class="error">Doslo je do greske pri unosu proizvoda</p>';
	}

}else if((isset($_POST['naziv']) && isset($_POST['opis']) && isset($_POST['kategorija']))) {
		// ipak je nesto submitovano, ali nije sve kako treba popunjeno
	echo '<p class="error">Niste pravilno popunili formu - pokusajte opet</p>';
};

?>
<h1>Novi proizvod</h1>

<form action="" method="POST">
	<label for="naziv">Naziv:</label>
	<input type="text" name="naziv">
	<br>
	<label for="opis">Opis proizvoda</label>
	<input type="text" name="opis">
	<br>
	<label for="kategorija">Kategorija</label>
	<input type="text" name="kategorija">
	<br>
	<input type="submit" value="Kreiraj novi proizvod">
</form>


<?php 

require_once('footer.php');
?>