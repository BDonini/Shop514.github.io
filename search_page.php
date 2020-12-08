<?php
  session_start();
  require("businessFunctions.php");
  $businesses = getBusinesses();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>-->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="nav.css">
  <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div id="main">
        <nav>
            <a class="logo" href="Homepage.php"><img src="img/Shop514LogoV2.svg" width="65" height="65"></a>
            <ul>
              <?php
                if (isset($_SESSION["usermail"])) {
                  require("navigation/loggedIn.php");
                } else {
                  require("navigation/loggedOut.php");
                }
              ?>
            </ul>
        </nav>
    <br>
    <br>
    <br>
    <br>
        <div class="header">
          <h1>Find Everything Near You</h1>
          <br>
          <div class="form-box2">
            <form class="search-bar" method="POST" action="">
              <input type="text" class="searchBusiness2" name="searchedTerm" placeholder="Search Keywords">
              <br>
              <br>
              <br>
  
              <input class="buttonSearch" type="submit" id="button" value="Search">
            </form>
          </div>
        </div>
        </br>
        </br>
        <ul>
          <?php
            if (isset($_POST["searchedTerm"])) {
              echo("<div class='searchResults'>");
              foreach ($businesses as $aBusiness) {
                if (strpos($aBusiness[getIndexByName("businessName")], 
                           $_POST["searchedTerm"]) !== false) {
                  echo("<div class='resultBox'>");
                    echo("<a class='resultLink' href='business_page.php?businessName=".$aBusiness[getIndexByName("businessName")]."'>");
                      echo("<table>");
                        echo("<tr>");
                          echo("<td>");
                            echo("<h3 class='resultName'>".$aBusiness[getIndexByName("businessName")]."</h3>");
                          echo("</td>");
                          echo("<td>");
                            echo("<h3 class='resultName'>".$aBusiness[getIndexByName("business-address")]."</h3>");
                          echo("</td>");
                          echo("<td>");
                            echo("<h3 class='resultName'>".$aBusiness[getIndexByName("phone-number")]."</h3>");
                          echo("</td>");
                          echo("<td>");
                            echo("<img src='".$aBusiness[getIndexByName("image-url")]."' width='80px' height='80px'>");
                          echo("</td>");
                        echo("</tr>");
                      echo("</table>");
                    echo("</a>");
                  echo("</div>");
                }
              }
              echo("</div>");
            }
          ?>
        </ul>
    </br>
    </br>
    </div>
</body>
</html>
