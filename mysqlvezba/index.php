<?php 
require_once ('db.php');

$id = mysql_real_escape_string($_GET['id']);

$sql = "DELETE FROM proizvodi WHERE id = '$id'";

mysql_query($sql);


 ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	table {
		margin: auto;
		padding: 0;

	}

	tr {
		margin: 0;
		padding: 0;
	}

	tr:nth-child(even) {
		background-color: gray;
	}

	td, th {
		border: 1px solid black;
		padding: 20px;


	}


	</style>
</head>
<body>
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
 		<td><a href="?id=<?php echo $row['id'] ?>">Delete</a></td>
 	</tr>
<?php 
}
 ?>
 	

 </table>
</body>
</html>
