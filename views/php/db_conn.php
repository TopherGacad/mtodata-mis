<?php

$sname= "localhost";
$unmae= "root";
$password = "";
$port = 3307;


$db_name = "mtodata";

$conn = mysqli_connect($sname, $unmae, $password, $db_name, 3307);

if (!$conn) {
	echo "Connection failed!";
	echo "Connection failed!";
}