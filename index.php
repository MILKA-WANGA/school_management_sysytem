
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
</head>
<body>
    <center>
  <fieldset   style="width: 400px; height:500px; color:blue;border:5px solid #0000FF; border-radius:20px;">

  <form action="Authentication.php" method="post">
    <table  >
        
   
    <h1> Login Here</h1><br><br><br>
    <label for="adm">Admission number:</label>&nbsp;&nbsp;&nbsp;
    <input type="text" name="adm"  ><br><br><br>
    
    <label for="email">Password:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="mail" name="email"  ><br><br><br>
    <a href="register.php" style="color:#0000FF;text-decoration:none;">Create Account</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="password.php" style="color:#0000FF;text-decoration:none;">Forgot Password</a><br><br><br>
    <input style="border-radius: 5px; width:100px;height: 30px;background-color: #0000FF;border:5px solid #0000FF" type="submit" name="button" value="Login">
    
    </table>

    </form>
    </fieldset>
    </center>


    <script>

        console.log("Hello world")
    </script>
</body>

</html>