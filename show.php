<?php
include ('dbcon.php');
   
?>

<!DOCTYPE html>
<html>
<head>
	<title>Show all data</title>
</head>
<body>	
	<table border="1" width="150">

		<thead>
			<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		</thead>

		<tbody>
			<?php  
$sql = "SELECT * FROM info";
$result = mysqli_query($con, $sql);  
 while($row = mysqli_fetch_assoc($result))
  {
      		$id = $row['id'];
      		$name = $row['name'];
      		$phone = $row['phone'];
      		$email = $row['email'];
     
	?>
			<tr>
				<td><?php echo $id; ?></td>
				<td><?php echo $name; ?></td>
				<td><?php echo $phone; ?></td>
				<td><?php echo $email; ?></td>
				<td><button><a href="update.php?id=<?=$row['id']?>">Edit</a></button></td>
				<td><button><a href="delete.php?id=<?=$row['id']?>">Delete</a></button></td>
			</tr>
		</tbody>
		
    <?php
     }
      ?>

	</table>

</body>
</html>