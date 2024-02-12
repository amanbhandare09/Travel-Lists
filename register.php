<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
    </head>
    <body>
    <div class='form2'>
        <h1>Register </h1>
        <h3> Please fill the form to create an account</h3>
        <form onsubmit="return formValidator();" method="post" action="insert.php" >
            Full Name: <input id="name" type="text" name="fullname" ><br><br>
            Phone No.: <input type="tel" name="phoneno" ><br><br>
            Email: <input type="email" name="email" ><br><br>
            <!-- <p style="text-align:center;">username cannot be changed later</p> -->
            Username: <input type="text" name="username" id="username" onBlur="checkavailability()" required>
            <div id="usernameavail"></div><br>
            password: <input type="password" name="password" ><br><br>
            <input type="submit" value="Submit" name="submit"><br>
        </form>
        <p >Already have an Account?  <a href="signin.php"> Login </a></p>
        </div><br>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>
			function checkavailability(){
				var username= $("#username").val();
				$.ajax({
					method:"POST",
                    url: "usernamecheck.php",
					data:{username:username},
					success: function(data){
						$('#usernameavail').html(data);	
					}
				});
            }
            </script>
        <style>
                body{
                    background-color: rgb(62, 100, 102);
                }
                .form2{

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
           <script src="register_val.js"></script> 
    </body>
</html>