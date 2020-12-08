<?php
  session_start();
  if (isset($_SESSION["usermail"])) {
    unset($_SESSION["usermail"]);
  }

  header("Location: login.php");
?>