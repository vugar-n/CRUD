<?php 
include "config.php";

$id = $_GET['id'];


$sql = "DELETE FROM `telebe` WHERE id=$id";

$query = mysqli_query($conn, $sql);

if ($query) {
	header("Location:show.php");
}else{
	echo "error";
}

 ?>