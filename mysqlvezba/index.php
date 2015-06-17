<?php 
session_start();
require_once('db.php');

$id = mysql_real_escape_string($_GET['id']);

$sql = "DELETE FROM proizvodi WHERE id = '$id'";

mysql_query($sql);

echo $_SESSION['user_name'];
require_once('header.php');
?>
<h1>Indeks proizvoda</h1>
<table>
	<tr>
		<th>ID</th>
		<th>Naziv</th>
		<th>Opis</th>
		<th>Kategorija</th>
		<th>Actions</th>
	</tr>

	<?php 
	$sql = "SELECT * FROM proizvodi";

	$result = mysql_query($sql);


	while($row = mysql_fetch_assoc($result)) {

		?>
		<tr>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['naziv'] ?></td>
			<td><?php echo $row['opis'] ?></td>
			<td><?php echo $row['kategorija'] ?></td>
			<td><a href="izmena_proizvoda.php?id=<?php echo $row['id'] ?>">Izmeni</a> | <a href="?id=<?php echo $row['id'] ?>">Delete</a></td>
		</tr>
		<?php 
	}
	?>


</table>
<?php  
require_once('footer.php');
?>