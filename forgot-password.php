<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav.css">
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
      <form class="pass">
        <header><h2 class="logRegHead">Reset Password</h2></header>
        <div class="shift">
          <label class="logReg" for="user email">Enter email address to reset password</label><br>
          <input type="text" class="acc" id="user email"><br>

          <input type="submit" class="reset-pw-btn" value="Send Reset">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
