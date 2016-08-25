<?php 
include "config.php";

 ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="add.php" method="post">
		<input type="text" name="name" placeholder="ad"><br>
		<input type="text" name="surname" placeholder="soyad"><br>
		<input type="number" name="age" placeholder="yas"><br>
		<input type="submit" name="submit" value="add">
	</form>

	<?php 
		if (isset($_POST['submit'])) {
			@$ad = $_POST['name'];
			@$soyad = $_POST['surname'];
			@$yas = $_POST['age'];

			$sql = "INSERT INTO `telebe`(`name`, `surname`, `age`) VALUES ('$ad','$soyad','$yas')";
			$query = mysqli_query($conn, $sql);

			if ($query) {
				header("Location:show.php");
			}else{
				echo "eror var";
			}


		}
	 ?>
</body>
</html>
 