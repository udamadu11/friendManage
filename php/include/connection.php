<?php 

$dbServer='localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'friend';

$con = mysqli_connect($dbServer,$dbUser,$dbPass,$dbName);
if (!$con) {
	echo "No Connection";
}


?>