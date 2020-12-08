<?php

  session_start();
  if (isset($_SESSION["usermail"])) {
    header("Location: Homepage.php");
  }

 if (isset($_POST['login'])) {
    $_SESSION['usermail'] = $_POST['usermail'];
    $_SESSION['pass'] = $_POST['pass'];

    $usermail = $_POST['usermail'];
    $pass = $_POST['pass'];

    $count1= 0;

    $check = explode("\n", file_get_contents('users.txt')); // creating an array where each index contains a line
	$count = count($check);

    for($i = 0; $i < $count; $i++){
    $fields = explode("\t", $check[$i]); //breaking each line by tabs to acheve a subarray of $check
        
        if(strcmp($usermail, $fields[0]) == 0){
            if(strcmp($pass, $fields[2]) == 0){
                  $count1= 1;
                 header("Location: Homepage.php");
            }
        }

    }

    if( $count1 == 0){
     echo '<script>alert("Authentication failed, please try again")</script>';
    } 
    

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!--<link rel="stylesheet" href="login_and_register.css">-->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="nav.css">
  <!--<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>-->
</head>
<body>
  <div id="main">
    <nav>
      <a class="logo" href="Homepage.php"><img src="img/Shop514LogoV2.svg" width="65" height="65"></a>
      <ul>
        <?php
         require("navigation/loggedOut.php");
        ?>
      </ul>
    </nav>

    <div class="accountForm">
      <form class="login" action="login.php" method="post">
        <header><h2 class="logRegHead">Login</h2></header>
        <div class="shift">
          <label class="logReg" for="usermail">Email Address:</label><br>
          <input type="text" class="acc" id="usermail" name="usermail" requred><br>

          <label class="logReg" for="password">Password:</label><br>
          <input type="password" class="acc" id="password" name="pass" required><br>
          <span class="loginLinks">New User? <a href="register.php">Register</a></span><br>
          <span class="loginLinks"><a href="forgot-password.php">Forgot Password</a></span><br>

          <input type="submit" class="button1" value="Login" name = "login">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
