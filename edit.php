<?php
require_once "conn.php";
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $fullname = $_POST['fullname'];
  $phoneno = $_POST['phoneno'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "UPDATE users SET fullname='$fullname', phoneno='$phoneno', email='$email', username='$username', password='$password' WHERE id = '$id'";
  if (mysqli_query($conn, $sql)) {
    header("location: account.php"); // Redirect to account page after successful update
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
}
?>