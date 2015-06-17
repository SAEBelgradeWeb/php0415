
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	header,footer{
		border:3px solid blue;
		background-color: gray; 
		padding:20px;
	}
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
	.success{
		color: green;
		border: 3px solid green;
		padding: 10px;
	}
	.error{
		color: red;
		border:3px solid red;
		padding: 10px;
		
	}


	</style>
</head>
<body>

<header>
	 <a href="index.php">Home</a> | <a href="novi_proizvod.php">Novi proizvod</a>
</header>