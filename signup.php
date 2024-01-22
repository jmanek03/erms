<?php
  if (isset($_POST["submit"])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    $password_confirmation = $_POST["confirm_password"];

    $errors = array();
    
    if (empty($firstname) OR empty($lastname) OR empty($email) OR empty($password) OR empty($password_confirmation)){
      array_push($errors,"All fields are required");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      array_push($errors,"Email is not valid");
    }
    if (strlen($password)<8){
      array_push($errors,"Password must be atleast 8 characters long");
    }
    if ($password!==$password_confirmation){
      array_push($errors,"Passwords do not match");
    }
    if (count($errors)> 0){
      foreach($errors as $error){
        echo "<div class='alert alert danger'>$error</div>";
      } 
    }
  }
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-COMPATIBLE" content="IE-EDGE">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="signup.css">
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
    <h2 class="title">SIGN UP</h2>
    <form class="form" action="signup.php" method="post">
    <div class="flex">
        <label>
            <input required="" placeholder="" type="text" class="input" name="firstname">
            <span>Firstname</span>
        </label>

        <label>
            <input required="" placeholder="" type="text" class="input" name="lastname">
            <span>Lastname</span>
        </label>
    </div>  
            
    <label>
        <input required="" placeholder="" type="email" class="input" name="email">
        <span>Email</span>
    </label> 
        
    <label>
        <input required="" placeholder="" type="password" class="input" name="password">
        <span>Password</span>
    </label>
    <label>
        <input required="" placeholder="" type="password" class="input" name="confirm_password">
        <span>Confirm password</span>
    </label>
    <button class="submit">SIGN UP</button>
    </form>
  </div>
</body>
</html>