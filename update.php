<?php require "dbcon.php"; ?>
<?php
  $id = $_GET['id'];
  $query = "Select * from info where id='$id' limit 1";
  $result = mysqli_query($con,$query);
 
  while($row = mysqli_fetch_assoc($result))
  {
          $id = $row['id'];
          $name = $row['name'];
          $phone = $row['phone'];
          $email = $row['email'];
     }

if(isset($_POST['name'])){
$name = $_POST['name'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $update_query = "update info set name='$name', phone = '$phone', email = '$email' where id ='$id' ";
 mysqli_query($con,$update_query);
 if(mysqli_error($con)){
 die(mysqli_error($con));
}
else{
  header("location:show.php");
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
    <input type="text" name="name" value="<?php echo $name; ?>" required><br>
    <label>Phone</label>
    <input type="text" name="phone" value="<?php echo $phone; ?>" required><br>
    <label>Email</label>
    <input type="Email" name="email" value="<?php echo $email; ?>" required><br>
    <button>Update</button>
   </form>
</body>
</html>