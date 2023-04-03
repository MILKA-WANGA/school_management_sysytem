<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<center>
  <fieldset   style="width: 400px; height:500px; color:blue;border:5px solid #0000FF; border-radius:20px;">

  <form action="Authentication.php" method="post">
    <table  >
<h1> Register Here</h1>
    <label for="adm">Admission number:</label>&nbsp;&nbsp;&nbsp;
    <input type="text" name="adm"  ><br><br><br>
    <label for="fname">First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input onchange="check_user()" type="text" name="fname"  ><br><br><br>
    <label for="sname" class="sname" id="sname">Second Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="sname" ><br><br><br>
    <label for="surname">Surname:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="surname"  ><br><br><br>
    <label for="email">Email  Address:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="email"  ><br><br><br>
    <label for="age">Age:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="age"  ><br><br><br>
    
    <a href="index.php" style="color:#0000FF;text-decoration:none;">Already registered?</a><br><br>
    <input style="border-radius: 5px; width:100px;height: 30px;background-color: #0000FF;border:5px solid #0000FF" type="submit" name="button" value="Register">
   
</table>

</form>
</center>
</fieldset>

<script>


function check_user(){
    alert("hello");
  
}
</script>
</body>
</html>

    