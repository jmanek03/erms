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
    <span id="address">K. J. Somaiya Institute Of Technology, Somaiya, Sion, Mumbai, Maharashtra 400022</span>
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
    <?php
      if (isset($_POST["submit"])){
        $firstName = $_POST["firstname"];
        $lastName = $_POST["lastname"];
        $email = $_POST["email"];
        $password = $_POST["password"]; 
        $passwordConfirmation = $_POST["confirm_password"];
        $userType = "user";

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $errors = array();
        
        if (empty($firstName) OR empty($lastName) OR empty($email) OR empty($password) OR empty($passwordConfirmation)){
          array_push($errors,"All fields are required");
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
          array_push($errors,"Email is not valid");
        }
        if (strlen($password)<8){
          array_push($errors,"Password must be atleast 8 characters long");
        }
        if ($password!==$passwordConfirmation){
          array_push($errors,"Passwords do not match");
        }
        require_once "database.php";  
        $sql = "SELECT * FROM signup WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        if ($rowCount> 0){
          array_push($errors,"Email already exists");
        }
        if (count($errors)> 0){
          foreach($errors as $error){
            echo "<div class='alert alert danger'>$error</div>";
          } 
        }
        else{
          $sql = "INSERT INTO signup (firstName, lastName, email, password, userType) VALUES (?,?,?,?,?)";
          $stmt = mysqli_stmt_init($conn);
          $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
          if ($prepareStmt){
            mysqli_stmt_bind_param($stmt,"sssss",$firstName,$lastName,$email,$passwordHash,$userType);
            mysqli_stmt_execute($stmt);
          } 
          else{
            die("Something went wrong!");
          }
        }
      }
    ?>
    <div id="signUp-container">
    <h2 class="title">SIGN UP</h2>
    <form class="form" action="signin.php" method="post">
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
    <button class="submit" type="submit" name="submit" id="sign-up-btn">SIGN UP</button>
    </form>
    </div>
    <div id="signIn-container" class="hide">
    <h2 class="title">LOG IN</h2>
    <form class="form" action="signin.php" method="post">
    <label>
        <input required="" placeholder="" type="email" class="input" name="email" class="form-control">
        <span>Email</span>
    </label> 
    <label>
        <input required="" placeholder="" type="password" class="input" name="password" class="form-control">
        <span>Password</span>
    </label>
    <button class="submit" type="submit" value="signin" name="signin" id="sign-in-btn">SIGN IN</button>
    </form>
    </div>
    <script>
      const signInBtn = document.querySelector('#radio-2');
      const signUpBtn = document.querySelector('#radio-1');
      const signUpForm = document.querySelector('#signUp-container');
      const signInForm = document.querySelector('#signIn-container');
      const changeForm = (form1, form2) => {
        form1.classList.toggle('hide');
        form2.classList.toggle('hide');
      }
      signInBtn.addEventListener('change', () => {
        changeForm(signUpForm, signInForm);
      });
      signUpBtn.addEventListener('change', () => {
        changeForm(signUpForm, signInForm);
      })
    </script>
  </div>
</body>
</html>