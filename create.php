<?php
require_once "conn.php";

$sql = "CREATE TABLE students (
    id INT(2) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(30) NOT NULL,
    comments VARCHAR(50) NOT NULL,
    gender VARCHAR(30) NOT NULL
    )";

    if(mysqli_query($conn, $sql)){
        echo("<script>alert('Table students created successfully');window.location.href ='index.php';</script>");
    }else{
        echo"<script>alert('Error creating table: " .mysqli_error($conn)."');</script>";
    }
    mysqli_close($conn);
    ?>