<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
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
      <form class="register">
        <header><h2 class="logRegHead">Create Account</h2></header>
        <div class="shift">
          <label class="logReg">Account Type:</label><br>
          <input type="radio" name="account-type" value="customer" id="option-customer">
          <label for="option-customer" class="accType">Customer</label><br>
          <input type="radio" name="account-type" value="customer" id="option-business">
          <label for="option-business" class="accType">Business Owner</label>
          <br><br>

          <label for="user firstname" class="logReg">First Name:</label><br>
          <input type="text" id="user firstname"><br>
          <label for="user lastname" class="logReg">Last Name:</label><br>
          <input type="text" id="user lastname"><br>
          <label for="user email" class="logReg">Email Address:</label><br>
          <input type="text" id="user email"><br><br>

          <label for="password" class="logReg">Password:</label><br>
          <input type="password" id="password"><br>
          <label for="confPassword" class="logReg">Confirm Password:</label><br>
          <input type="password" id="confPassword"><br>

          <input type="submit" class="button1" value="Register">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
