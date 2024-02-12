<?php
require_once "conn.php";
$id = $_REQUEST['id'];
$sql = "SELECT * FROM users WHERE id = '" . $id . "'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="wtproject.css">
</head>
<body>
  <br><br><br><br>
<form id="updateform" method="post" action="edit.php">
  <input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
  Name: <input type="text" name="fullname" value="<?php echo $row['fullname']; ?>">
  <br><br>
  Phone no.: <input type="phone" name="phoneno" value="<?php echo $row['phoneno']; ?>">
  <br><br>
  email: <input type="email" name="email" value="<?php echo $row['email']; ?>">
  <br><br>
  <input type="hidden" name="username" value="<?php echo $row['username']; ?>">
  Password: <input type="password" name="password" value="<?php echo $row['password']; ?>">
  <br><br>
  <button value="submit" name="submit">Save Changes</button>
</form>

</body>
</html>

