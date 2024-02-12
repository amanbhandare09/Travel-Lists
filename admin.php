<?php
require_once "conn.php";

$sql="SELECT * FROM users";
$result=mysqli_query($conn,$sql);
?>

<html>
    <head>
    <link rel="stylesheet" type="text/css" href="wtproject.css">
    </head>
    <body><br><br>
    <h3 style="text-align:center; font-size:60px;">User Manager</h3><br><br><br>
        <table style="margin-left: 200px;" border="1" cellspacing="0">
            <tr>
                <th class="admintxt">Id</th>
                <th class="admintxt">Name</th>
                <th class="admintxt">Phone</th>
                <th class="admintxt">Email</th>
                <th class="admintxt">Username</th>
                <th class="admintxt">Password</th>
                <th class="admintxt">Actions</th>                
            </tr>    
            <?php
                if(mysqli_num_rows($result)>0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>
                                <td class="admintxt">'.$row["id"].'</td>
                                <td class="admintxt">'.$row["fullname"].'</td>
                                <td class="admintxt">'.$row["phoneno"].'</td>
                                <td class="admintxt">'.$row["email"].'</td>
                                <td class="admintxt">'.$row["username"].'</td>
                                <td class="admintxt">'.$row["password"].'</td>
                                <td class="admintxt"><a href="update.php?id='.$row["id"].'">Edit</a><a href="delete.php?id='.$row["id"].'">Delete</td>
                              </tr>';
                    }
                } else {
                    echo "0 results";
                }
                mysqli_close($conn);
                ?>
                </table>
                <a href="account.php">check Updated Account</a><nav>
            <br><br>
            <h1 style="color: antiquewhite;">MENU</h1>
            <br><br>
            <a id="expnavig" href="home.html">HOME</a>  
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