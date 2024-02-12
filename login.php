<?php
session_start();
require_once "conn.php";
if(isset($_POST["submit"]))
{
    if(!empty($_POST["username"]) && !empty($_POST["password"]))
    {   $id = $_REQUEST['id'];
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "Select * from users WHERE username = '". $username . "' and password = '". $password ."'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result);
        if($user)
        {
            // if(!empty($_POST["checkbox"]))
            // {
            //     setcookie("user_login", $username, time()+(10*365*24*60*60));
            //     setcookie("user_pass", $password, time()+(10*365*24*60*60));
            // }
            // else{
                $_SESSION["username"] = $username;
                $_SESSION["login"] = "login";
            // }
            // $id = $user["id"];
            
            header("location:account.php");
        } else{
            echo "<script>
            alert('invalid Login Credentials');
            window.location.href ='register.php';
            </script>";
    }
    }else{
        echo "<script>alert('Values cannot be empty!');window.location.href ='signin.php';</script>";
    }
}
