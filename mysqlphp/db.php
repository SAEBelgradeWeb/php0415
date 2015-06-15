<?php 

define(USERNAME, "root");
define(PASSWORD, 'root');
define(HOSTNAME, 'localhost');
define(DATABASE, 'proba');


$conn = mysql_connect(HOSTNAME, USERNAME, PASSWORD);
if(!$conn) die("Connection not successful!");
$db = mysql_select_db(DATABASE);
if(!$db) die("Can't connect to the database!");
 ?> 