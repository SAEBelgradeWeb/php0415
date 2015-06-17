<?php 
session_start();
require_once('db.php');
require_once('header.php');

$_SESSION['user_name']='Milena';

$id = mysql_real_escape_string($_GET['id']);
// prvo izvucemo staru vrednost 

$query = "SELECT * FROM proizvodi WHERE id=$id";
$stari_result = mysql_query($query);

if ($stari_row = mysql_fetch_assoc($stari_result)) {
	echo 'procitao sam stari';


}

if (isset($_POST['naziv']) && isset($_POST['opis']) && isset($_POST['kategorija']) 
	&& $_POST['naziv']!="" && $_POST['opis']!="" && $_POST['kategorija']!=""){

	$naziv = mysql_real_escape_string($_POST['naziv']);
	$opis = mysql_real_escape_string($_POST['opis']);
	$kategorija = mysql_real_escape_string($_POST['kategorija']);

if ($stari_row['naziv']==$naziv && $stari_row['opis']==$opis && $stari_row['kategorija']==$kategorija ){
	echo 'nista nisi editovo covece bre ej!';
}else{
	$query = "UPDATE proizvodi SET naziv = '$naziv', opis='$opis' , kategorija='$kategorija' WHERE id=$id;";

	$status = mysql_query($query);

	if ($status){
		echo '<p class="success">Proizvod uspesno izmenjen</p>';
	}else{
		echo '<p class="error">Doslo je do greske pri izmeni proizvoda</p>';
	}
}


}else if((isset($_POST['naziv']) && isset($_POST['opis']) && isset($_POST['kategorija']))) {
		// ipak je nesto submitovano, ali nije sve kako treba popunjeno
	echo '<p class="error">Niste pravilno popunili formu - pokusajte opet</p>';
};

$query = "SELECT * FROM proizvodi WHERE id=$id";
$result = mysql_query($query);

if ($row = mysql_fetch_assoc($result)) {
	
	?>

	<h1>Izmena proizvoda</h1>

	<form action="" method="POST">
		<label for="naziv">Naziv:</label>
		<input type="text" name="naziv" value="<?php echo $row['naziv']; ?>">
		<br>
		<label for="opis">Opis proizvoda</label>
		<input type="text" name="opis" value="<?php echo $row['opis']; ?>">
		<br>
		<label for="kategorija">Kategorija</label>
		<input type="text" name="kategorija" value="<?php echo $row['kategorija']; ?>">
		<br>
		<input type="submit" value="Izmeni proizvod">
	</form>
	<?php 
}else{
	echo "Ne postoji trazeni proizvod sa id=$id";
};







?>
<?php 
require_once('footer.php');

?>