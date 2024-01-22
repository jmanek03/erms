<?php

?>
<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-COMPATIBLE" content="IE-EDGE">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="signup.css">
  <link rel="shortcut-icon" type="image/x-icon" href="favicon.ico">
  <title>K. J. SOMAIYA INSTITUTE OF TECHNOLOGY</title>
</head>

<body>
  <div class="header">
    <img src="logo1.png">
    <span id="college"> K. J. SOMAIYA INSTITUTE OF TECHNOLOGY</span>
    <span id="address">K. J. Somaiya Institue Of Technology, Somaiya, Sion, Mumbai, Maharashtra 400022</span>
  </div>
  <hr>
  <div class="container1">
    <img src="somaiya-logo.png"><br><br><br><br><br><br>
    <div class="login-type">
	    <div class="tabs">
		    <input type="radio" id="radio-1" name="tabs" checked="">&nbsp;&nbsp;
		    <label class="tab" for="radio-1">SIGN UP</label>&nbsp;&nbsp;&nbsp;&nbsp;
		    <input type="radio" id="radio-2" name="tabs">
		    <label class="tab" for="radio-2">SIGN IN</label>
		    <span class="glider"></span>
	    </div>
    </div>
  </div>
  <div class="container2">
    <h2 class="title">LOG IN</h2>
    <?php
    if (isset($_POST["signin"])){
      $email= $_POST["email"];
      $password= $_POST["password"];
      require_once "database.php";
      $sql="SELECT * FROM signup WHERE email = '$email'";
      $result=mysqli_query($conn,$sql);
      $user=mysqli_fetch_array($result, MYSQLI_ASSOC);
      if($user){
        if (password_verify($password,$user["password"])){
          header("Location: userhome.php") ;
          die();
        }
        else{
          echo "Password does not match";
        }
      }
      else{
        echo "Email does not match";
      }
    }
    ?>
    <form class="form" action="signin.php" method="post">
    <label>
        <input required="" placeholder="" type="email" class="input" name="email" class="form-control">
        <span>Email</span>
    </label> 
    <label>
        <input required="" placeholder="" type="password" class="input" name="password" class="form-control">
        <span>Password</span>
    </label>
    <button class="submit" type="submit" value="signin" name="signin">SIGN IN</button>
    </form>
  </div>
</body>
</html>