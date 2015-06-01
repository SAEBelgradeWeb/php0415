<pre><?php 
var_dump($_POST);

 ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<form action="" method="POST">

Unesi svoje ime<input type="text" name="ime" required><br>
Musko <input type="radio" name="pol" value="musko">
Zensko <input type="radio" name="pol" value="zensko">

<br>
Koje sve kolace volis?<br>
Isleri <input type="checkbox" name="kolaci[]" value="isler" checked>
Baklave <input type="checkbox" name="kolaci[]" value="baklava">
Sampite <input type="checkbox" name="kolaci[]" value="sampita" checked>
Cupavci <input type="checkbox" name="kolaci[]" value="cupavac">
<br>

<select name="grad[]" id="" >
	<option value="bg">Beograd</option>
	<option value="ns" selected>Novi Sad</option>
	<option value="nsh">Nis</option>
</select>

<button>Posalji</button>

</form>


	
</body>
</html>