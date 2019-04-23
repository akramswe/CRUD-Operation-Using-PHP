<?php require "dbcon.php"; ?>
<?php
  $id = $_GET['id'];
  $query = "delete from info where id = '$id'";
  $result = mysqli_query($con,$query);
  if(mysqli_error($con)){
 die(mysqli_error($con));
}
else{
  header("location:show.php");
}
 ?>