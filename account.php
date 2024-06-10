<?php
session_start();
if (!isset($_SESSION['username'])) {
    // User is not logged in, display appropriate message and apply CSS
    echo '<style>
    body{
        background-color: rgb(201, 218, 219);
    }
    .home-box {
        text-align: center;
        font-size: 40px;
    }
  .message-box {
    background-color: white;
    text-align: center;
    font-size: 40px;
    margin: 10%;
    padding: 10px 10px;
    border: 5px solid black;
  }
</style>';

echo "<div class='message-box'>";
echo "No user has logged in. <br> Please";
echo " <a href='signin.php'>log in</a>/";
echo " <a href='register.php'>Register</a>";
echo " to view your account details.";
echo "</div>";
echo "<div class='home-box'>";
echo "<br><br> <a href='index.html'>HOME</a>";
echo "</div>";


    // Optionally, redirect to the login page if you want to force login
    // header('Location: login.php');
    exit;
}
require_once "conn.php";

$sql = "SELECT * FROM users WHERE username = '" . $_SESSION['username'] . "'";

$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Your Account</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="wtproject.css">
    </head>
    <body><br><br><br>
        <h3 style="text-align:center; font-size:80px;">ACCOUNT</h3>
        <br><br><br>
        <!-- <svg width="100" height="100">
            <circle cx="25" cy="25" r="25" fill="#ccc" />
          </svg> -->
          <table cellspacing="2">
            <tr>
                <th style="text-align:center; font-size: 36px;">Account Info</th>
                <th style="text-align:center; font-size: 36px;"></th>             
            </tr>    
            <?php
                if(mysqli_num_rows($result)>0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>
                        <td><br>
                            <label style="font-size: 28px;">Full Name:</label><br><br>
                            <label style="font-size: 28px;">Phone Number:</label><br><br>
                            <label style="font-size: 28px;">Email:</label><br><br>
                            <label style="font-size: 28px;">Username:</label><br><br>
                        </td>
                        <td>
                            <span style="font-size: 28px;">' . $row["fullname"] . '</span><br><br>
                            <span style="font-size: 28px;">' . $row["phoneno"] . '</span><br><br>
                            <span style="font-size: 28px;">' . $row["email"] . '</span><br><br>
                            <span style="font-size: 28px;">' . $row["username"] . '</span><br><br>
                        </td>
                    </tr>';
                    }
                } else {
                    echo "0 results";
                }
                mysqli_close($conn);
                ?>
                </table><br><br>
                <nav>
            <br><br>
            <h1 style="color: antiquewhite;">MENU</h1>
            <br><br>
            <a id="expnavig" href="index.html">HOME</a>  
            <a id="expnavig" href="account.php">Account</a>
            <a id="expnavig" href="explore.php">Explore</a>
            <a id="expnavig" href="cart.php">Wishlist</a>
            <br><br><br><br><br><br><br><br><br>
            <a id="expnavig" href="admin.php">Manage Users</a>
            <a id="expnavig" href="contactus.html">Contact Us</a>
            <br><br><br><br><br><br><br><br>
        </nav>
    </body>
</html>