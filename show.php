<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
        <table border="1">
        	<thead>
        		<tr>
        			<th>id</th>
        			<th>ad</th>
        			<th>soyad</th>
        			<th>yas</th>
        			<th>delete</th>
        			<th>edit</th>
        		</tr>
        	</thead>
        	<tbody>
        		<?php 
        			include "config.php";

        			$sql = "SELECT * FROM `telebe`";
        			$query = mysqli_query($conn, $sql);

        			if ($query) {
        				
        				while($row = mysqli_fetch_assoc($query)){
        					echo "<tr>";
        					
        					echo"<td>".$row['id']."</td>";
        					echo"<td>".$row['name']."</td>";
        					echo"<td>".$row['surname']."</td>";
        					echo"<td>".$row['age']."</td>";
        					echo"<td><a href='delete.php?id=".$row['id']."'>delete</a></td>";
        					echo"<td><a href='edit.php?id=".$row['id']."'>edit</a></td>";
        					
        					echo "</tr>";
        				}


        			}


        		 ?>
        	</tbody>
        </table>
        <a href="add.php">yeni melumat elave et</a>
        <script src="js/main.js"></script>
    </body>
</html>