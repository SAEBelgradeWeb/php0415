<pre>
<?php 
require_once('db.php');

$sql = "INSERT INTO postovi SET naslov = 'Ubaceno iz php', id_user=2, sadrzaj='Some content'";

$result = mysql_query($sql);

//$sql = mysql_query("INSERT INTO postovi SET naslov = 'Ubaceno iz php', id_user=2, sadrzaj='Some content'");

//$sql = mysql_query("UPDATE postovi SET naslov = 'Promenjeno iz php' WHERE id = 4");

//$sql = mysql_query("DELETE FROM postovi WHERE id = 4");

$sql = "SELECT * FROM postovi";

$result = mysql_query($sql);
//$broj_redova = mysql_num_rows($sql);

while($row = mysql_fetch_assoc($result)){
	echo $row['naslov'];

	echo "<br>";
}

?>


<table>
	<th>
		<td>ID</td>
		<td>Naziv</td>
		<td>Opis</td>
	</th>

	<tr>
		<td>1</td>
		<td>Olovka</td>
		<td>Olovka za pisanje</td>
	</tr>

	<tr>
		<td>2</td>
		<td>LKnjiga</td>
		<td>Olovka za pisanje</td>
	</tr>

	<tr>
		<td>3</td>
		<td>Olovka</td>
		<td>Olovka za pisanje</td>
	</tr>
</table>
<?php







mysql_close($conn);
?>