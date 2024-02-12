<?php
session_start();

if(isset($_COOKIE["user_login"]))
{
    echo "WELCOME " . $_COOKIE["user_login"];
}
elseif(isset($_SESSION["login"]))
{
    echo "hello";
    echo "WELCOME " . $_SESSION["username"];
}
else{
    header("location:signin.php");
}
?>

<!DOCTYPE html>
<html>
    <a href="logout.php" > LOGOUT </a>