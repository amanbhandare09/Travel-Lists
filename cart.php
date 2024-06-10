<?php
require_once "conn.php";

$sql = "SELECT * FROM cart";
$result = mysqli_query($conn, $sql);
?>

<html>
<head>
    <title>Wishlist</title>
    <link rel="stylesheet" type="text/css" href="cart.css">
</head>
<body>
    <br><br><h2>WISHLIST</h2><br><br><br><br><br>
    <div class="container">
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="user">
                <p style="display: inline-block;">
                  <strong> ' . $row["w_name"] . '</strong>
                  <span style="color: black;">
                    <a style="color: red;" href="cartdelete.php?w_id=' . $row["w_id"] . '" class="button-link">X</a>
                  </span>
                </p>
              </div><br><br><br>';
            }
        } else {
            echo '<div class="empty-cart-message">Your cart is empty.<br><br> <a href="explore.php" class="button-link">EXPLORE PLACES</a></div>';
        }
        mysqli_close($conn)
        ?>
        <!-- <a href="index.html" class="button-link home-link">HOME</a> -->
    </div>
    <nav>
            <br><br>
            <h1 style="color: antiquewhite;">MENU</h1>
            <br><br>
            <a id="navig" href="index.html">HOME</a>
            <a id="navig" href="account.php">Account</a>
            <a id="navig" href="explore.php">Explore</a>
            <a id="navig" href="cart.php">Wishlist</a>
            <br><br><br><br><br><br><br><br><br>
            <a id="navig" href="admin.php">Manage Users</a>
            <a id="navig" href="#">Contact Us</a>
        </nav>
</body>
</html>
