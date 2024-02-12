<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
    </head>
    <body>
        <h1>Register </h1>
        <h3> Please fill the form to create an account</h3>
        <div
            <form onsubmit="return formValidator();">
        <form method="post" action="insert.php">
            Full Name: <input type="text" name="fname" ><br>
            Phone No.: <input type="phone" name="phone" ><br>
            Email: <input type="email" name="email" ><br>
            Username: <input type="text" name="username" ><br>
            password: <input type="password" name="password" ><br>
            <input type="submit" value="Submit" name="submit">
        </form>    </form>
        </div><br>
       
        <p>Already have an Account?  <a href="login.php">Login</a></p> 
    </body>
</html>