<?php 

$host = "localhost";
$name = "root";
$password = "";
$db = "crud";


$conn = mysqli_connect($host,$name,$password,$db);

if (!$conn) {
	echo "eror";
}



 ?>