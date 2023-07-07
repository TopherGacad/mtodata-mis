<?php

$sname= "mysql8001.site4now.net";
$uname= "a9aa39_mtodata";
$password = "2023mtodata";


$db_name = "db_a9aa39_mtodata";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}