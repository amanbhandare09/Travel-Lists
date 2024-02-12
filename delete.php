<?php
require_once "conn.php";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "DELETE FROM users WHERE id = '$id'";

  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('User deleted successfully!');</script>";
    header("location: account.php"); // Redirect to the account page
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>
