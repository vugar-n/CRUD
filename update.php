<?php 

include "config.php";

if (isset($_POST)) {
	$id = $_POST['id'];
	$ad = $_POST['name'];
	$soyad = $_POST['surname'];
	$age = $_POST['age'];


	$sql = "UPDATE `telebe` SET `name`='$ad',`surname`='$soyad',`age`='$age' WHERE id = $id";
	
	$query = mysqli_query($conn,$sql);
	if ($query) {
		header("Location:show.php");
	}else {
		echo "error";
	}
}



 ?>