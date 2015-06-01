<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<form action="listener.php" method="POST">
		<label for="username">Username</label>
		<input type="text" name="username">

		<label for="password">Vas password</label>
		<input type="password" name="password">
		<br>

		<label for="checker">Save my password</label>
		<input type="checkbox" name="che" id="checker">


		<label for="radiodugme">
			Da <input type="radio" name="radiodugme" value="1">
		</label>
		<label for="radio">
			Ne <input type="radio" name="radiodugme" value="2">	
		</label>
		


		<input type="submit" value="Submit">


	</form>


</body>
</html>