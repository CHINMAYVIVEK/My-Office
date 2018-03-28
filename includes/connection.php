<?php

$server = "localhost";
$username ="root";
$password ="";
$database_name="my_office";

$conn = mysql_connect($server, $username, $password) or die (mysql_error());
$select_db = mysql_select_db($database_name, $conn) or die (mysql_error());


?>
