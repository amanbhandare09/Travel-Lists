<?php
    require_once "conn.php";
    if(isset($_POST['submit'])){
        $place=$_POST['w_name'];

        if($place !=""){
            $sql = "INSERT INTO cart (w_name)
            VALUES('$place')";
            if(mysqli_query($conn,$sql)){
                echo "<script>window.location.href='cart.php';</script>";
            }
            else{
                echo mysqli_error($conn);
            }
        }else{
            echo "<script>window.location.href='explore.php';</script>";
        }
    }
?>

