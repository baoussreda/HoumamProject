<?php 

$sname = "mydb";
$uname = "root";
$password = "";
$db_name = "pfe";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "connection failed";
}
?>