<?php
require_once "conn.php";
$id=$_GET['w_id'];
$sql = "DELETE FROM cart WHERE w_id=$id";
$result = mysqli_query($conn,$sql);
include 'cart.php'
?>