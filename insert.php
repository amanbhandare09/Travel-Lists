<?php
    require_once "conn.php";
    if(isset($_POST['submit'])){

        $fullname=$_POST['fullname'];
        $phoneno=$_POST['phoneno'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=$_POST['password'];

        if($fullname !="" && $phoneno !="" && $email !="" && $username !="" && $password !="" ){
            $sql ="INSERT INTO users(fullname, phoneno, email, username, password)
            VALUES('$fullname', '$phoneno', '$email', '$username', '$password')";
            if(mysqli_query($conn,$sql)){
                echo("<script>alert(' Account Successfully Created! ');window.location.href ='home.html';</script>");
            }else{
                echo mysqli_error($conn);
            }
             }
            //  else{
        //         echo "<script>alert('Values cannot be empty!');window.location.href ='login.php';</script>";
        // }
    }