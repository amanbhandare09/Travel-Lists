<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
    </head>
    <body>
        <div class='form1'>
        <h1 > Sign in </h1>
        <h3 > Please fill the login Form</h3>
        <form method="post" action="login.php">
            username: <input type="text" name="username"><br><br>
            password: <input type="password" name="password" ><br><br>
            <!-- <label>Keep me logged In </label>
            <input id="checkbox" type="checkbox" name="checkbox"><br><br> -->
            <input type="submit" value="Login" name="submit">
        </form>   
        <p >Don't have an Account?  <a href="register.php"> Register </a></p>
</div>
            <style>
                body{
                    background-color: rgb(62, 100, 102);
                }
                .form1{

                    font-weight: bold;
                    background-color: white;
                    border: 3px solid rgb(0, 0, 0);
                    padding: 10px 10px 50px;
                    margin: 30px auto;
                    border-radius: 12px;
                    width: 25%;
                    text-align: center
                }    
            </style>
    </body>
</html>
