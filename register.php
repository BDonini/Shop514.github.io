<?php
session_start();


  if(isset($_POST['register'])){

    /*$_SESSION['account-type'] = $_POST['account-type'];
    $_SESSION['firstName'] = $_POST['firstName'];
    $_SESSION['lastName'] = $_POST['lastName'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['pass'] = $_POST['pass'];*/
    

    $accountType = $_POST['account-type'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $confirmpass = $_POST['confirmpass'];

    $count1=3;
    

    if(strcmp($pass, $confirmpass)!= 0){
       // $_SESSION['Error'] = "Password does not match";
       echo '<script>alert("Password does not match")</script>';
        $count1=1;} else {$count1=0;}
    
        

     /*if( isset($_SESSION['Error']) ){
        echo $_SESSION['Error'];
        unset($_SESSION['Error']);}*/

    $check = explode("\n", file_get_contents('users.txt')); // creating an array where each index contains a line
	$count = count($check);

    for($i = 0; $i < $count; $i++) {
	


		$fields = explode("\t", $check[$i]); //breaking each line by tabs to acheve a subarray of $check
        
        if(strcmp($email, $fields[0]) == 0){
			echo '<script>alert("This email already exists")</script>';
            $count1=2;
            
		}
        
        }


        if($count1 == 0) {
        $to_write = $email."\t".$accountType."\t".$pass."\t".$firstName."\t".$lastName."\n";
		$file = "users.txt";

		file_put_contents($file, $to_write, FILE_APPEND);
        header("Location: login.php");
        }
  }

        
        
        


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
      <form class="register" action="register.php" method="post">
        <header><h2 class="logRegHead">Create Account</h2></header>
        <div class="shift">
          <label class="logReg">Account Type:</label><br>
          <input type="radio" name="account-type" value="customer" id="option-customer">
          <label for="option-customer" class="accType">Customer</label><br>
          <input type="radio" name="account-type" value="business" id="option-business"> <! changed value to business>
          <label for="option-business" class="accType">Business Owner</label>
          <br><br>

          <label for="user firstname" class="logReg">First Name:</label><br>
          <input type="text" id="user firstname" name = "firstName" required><br>             <!added name>
          <label for="user lastname" class="logReg">Last Name:</label><br>
          <input type="text" id="user lastname" name = "lastName" required><br>            <!added name>
          <label for="user email" class="logReg">Email Address:</label><br>
          <input type="text" id="user email" name = "email" required><br><br>             <!added name>


          <label for="password" class="logReg">Password:</label><br>
          <input type="password" id="password" name="pass" required><br>
          <label for="confPassword" class="logReg">Confirm Password:</label><br>
          <input type="password" id="confPassword" name="confirmpass" required><br>
          

          <input type="submit" class="button1" name = "register" value="Register">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
