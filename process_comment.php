<?php
  session_start();
  $requestsFile = fopen("comments.txt", "a") or die("Unable to open file!");
  fwrite($requestsFile, $_POST["businessName"].",");
  fwrite($requestsFile, $_SESSION["usermail"].",");
  fwrite($requestsFile, $_POST["comment"]."\n");
  header("Location: business_page.php?businessName=".urlencode($_POST["businessName"]));
?>