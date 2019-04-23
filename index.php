	<?php
	include ('dbcon.php');
	?>
<?php

if (isset($_POST['name'])) {
	$name = $_POST['name'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];


$sql = "Insert into info (name,phone, email) values ('$name', '$phone','$email')";
 mysqli_query($con,$sql);
if (mysqli_error($con)) {
	die(mysqli_error($con));
}
else{
	echo "Save Success";
}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert Page</title>
</head>
<body>
  <form method="POST">
    <label>Name</label>
    <input type="text" name="name" required><br>
    <label>Phone</label>
    <input type="text" name="phone" required><br>
    <label>Email</label>
    <input type="Email" name="email" required><br>
    <button>Save</button>
   </form>
</body>
</html>