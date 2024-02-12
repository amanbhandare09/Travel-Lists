<?php
require_once "conn.php";

$sql="SELECT * FROM users";
$result=mysqli_query($conn,$sql);
?>

<html>
    <body>
        <table border="1" cellspacing="0">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
                <th>Actions</th>                
            </tr>    
            <?php
                if(mysqli_num_rows($result)>0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>
                                <td>'.$row["id"].'</td>
                                <td>'.$row["fullname"].'</td>
                                <td>'.$row["phoneno"].'</td>
                                <td>'.$row["email"].'</td>
                                <td>'.$row["username"].'</td>
                                <td>'.$row["password"].'</td>
                                <td><a href="update.php?id='.$row["id"].'">Edit</a>/<a href="delete.php?id='.$row["id"].'">Delete</td>
                              </tr>';
                    }
                } else {
                    echo "0 results";
                }
                mysqli_close($conn);
                ?>
                </table>
                <a href="index.php">Go to Menu</a>
            </body>
        </html>    