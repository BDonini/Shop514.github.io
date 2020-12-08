<?php
  session_start();
  echo($_POST["image-url"]);
  $requestsFile = fopen("businesses.txt", "a") or die("Unable to open file!");
  
  fwrite($requestsFile, $_SESSION["usermail"].",");
  fwrite($requestsFile, $_POST["businessName"].",");

  fwrite($requestsFile, $_POST["phone-number"].",");
  fwrite($requestsFile, $_POST["business-website"].",");
  fwrite($requestsFile, $_POST["business-instagram"].",");
  fwrite($requestsFile, $_POST["business-email"].",");
  fwrite($requestsFile, $_POST["business-facebook"].",");
  fwrite($requestsFile, $_POST["business-address"].",");
  fwrite($requestsFile, $_POST["business-twitter"].",");

  fwrite($requestsFile, json_encode(isset($_POST["food"])).",");
  fwrite($requestsFile, json_encode(isset($_POST["clothing"])).",");
  fwrite($requestsFile, json_encode(isset($_POST["personal-grooming"])).",");
  fwrite($requestsFile, json_encode(isset($_POST["artsNrec"])).",");

  if (isset($_POST["monday"])) {
    fwrite($requestsFile, $_POST["monOpen"]."---".$_POST["monClose"].",");
  } else {
    fwrite($requestsFile, json_encode(FALSE).",");
  }

  if (isset($_POST["tuesday"])) {
    fwrite($requestsFile, $_POST["tuesOpen"]."---".$_POST["tuesClose"].",");
  } else {
    fwrite($requestsFile, json_encode(FALSE).",");
  }

  if (isset($_POST["wednesday"])) {
    fwrite($requestsFile, $_POST["wedOpen"]."---".$_POST["wedClose"].",");
  } else {
    fwrite($requestsFile, json_encode(FALSE).",");
  }

  if (isset($_POST["thursday"])) {
    fwrite($requestsFile, $_POST["thursOpen"]."---".$_POST["thursClose"].",");
  } else {
    fwrite($requestsFile, json_encode(FALSE).",");
  }

  if (isset($_POST["friday"])) {
    fwrite($requestsFile, $_POST["friOpen"]."---".$_POST["friClose"].",");
  } else {
    fwrite($requestsFile, json_encode(FALSE).",");
  }

  if (isset($_POST["saturday"])) {
    fwrite($requestsFile, $_POST["satOpen"]."---".$_POST["satClose"].",");
  } else {
    fwrite($requestsFile, json_encode(FALSE).",");
  }

  if (isset($_POST["sunday"])) {
    fwrite($requestsFile, $_POST["sunOpen"]."---".$_POST["sunClose"].",");
  } else {
    fwrite($requestsFile, json_encode(FALSE).",");
  }

  fwrite($requestsFile, $_POST["image-url"].",");

  fwrite($requestsFile, $_POST["package"]."\n");

  fclose($requestsFile);
?>

<?php
  if ($_POST["package"] === "basic-card") {
    header("Location: business_page.php?businessName=".$_POST["businessName"]);
  } else {
    header("Location: payment.php?package=".$_POST["package"]."&businessName=".$_POST["businessName"]);
  }
?>