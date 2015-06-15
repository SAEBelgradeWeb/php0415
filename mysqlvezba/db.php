<?php 
$hostname = "localhost";
$username = "root";
$password = "root";
$database = "mysqlvezba";

$conn = mysql_connect($hostname, $username, $password);

if (!$conn) die('Konekcija nije uspela');

$db = mysql_select_db($database);

if (!$db) die('Baza ne moze biti selektovana');



 ?>