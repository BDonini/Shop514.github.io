<?php
  session_start();
  require("businessFunctions.php");
  require("commentFunctions.php");
  $business = getBusinessByName($_GET["businessName"]);
  $comments = getCommentsByBusinessName($_GET["businessName"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>
    <?php
      echo($business[getIndexByName("businessName")]);
    ?>
    </title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin="">
        var mymap =null;
    </script>
    <style>
      .wrap {
        background: rgba(0,0,0,0.5) url(<?php echo($business[getIndexByName("image-url")]); ?>) no-repeat;
        background-position: center;
        background-size: cover;
        min-height: 70vh;
        overflow: hidden;
        background-blend-mode: overlay;
      }
    </style>
</head>
<body>
  <div class="wrap">
    <nav style="position: fixed">
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
    <div class="content">
        <h1><?php echo($business[getIndexByName("businessName")]); ?></h1>
    </div>
  </div>

  <div class="description">
    <section>
        <br />
        <br />
        <br />
        <h2 class="bizPage"> About Us</h2>
        <hr>
        <p class="p1"><?php echo($business[getIndexByName("businessName")]); ?></p>
        <div class="social-media">
            <br /><br /><br /><br />
            <ul>
                <li><a target="_blank" href=<?php echo($business[getIndexByName("business-facebook")]); ?>><i class="fa fa-facebook"></i></a></li>
                <li><a target="_blank" href=<?php echo($business[getIndexByName("business-twitter")]); ?>><i class="fa fa-twitter"></i></a></li>
                <li><a target="_blank" href=<?php echo($business[getIndexByName("business-instagram")]); ?>><i class="fa fa-instagram"></i></a></li>
                <li><a target="_blank" href=<?php echo($business[getIndexByName("business-website")]); ?>><i class="fa fa-globe"></i></a></li>
            </ul>
        </div>
    </section>

    <aside class=" rating">

        <div class="tbl">
            <table class="openHrsTbl">
                <br />
                <br />
                <br />
                <h2 class="bizPage"> Open Hours </h2>
                <hr>
                <br />
                <br />
                <?php
                  $days = Array("monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday");
                  foreach ($days as $day) {
                    echo("<tr>");
                      echo("<td>$day</td>");
                      if ($business[getIndexByName($day)] !== "false") {
                        echo("<td class='time'>".$business[getIndexByName($day)]."</td>");
                      } else {
                        echo("<td class='time'>Closed</td>");
                      }
                    echo("</tr>");
                  }
                ?>
            </table>
        </div>

        <form action="process_comment.php" method="post">
          <fieldset>
            <legend>Leave A Review:</legend>
            <textarea name="comment" rows="4" cols="50"></textarea>
            <input type="hidden" name="businessName" value=<?php echo("'".$_GET["businessName"]."'"); ?>>
            <input type="submit" value="Comment">
          </fieldset>
        </form>

        <ul style="list-style-type:none;">
          <?php
            foreach ($comments as $aComment) {
              echo("<li>");
                echo($aComment[1].": ".$aComment[2]);
              echo("</li>");
            }
          ?>
        </ul>
    </aside>

    <footer class="map">
      <iframe
        width="600"
        height="450"
        frameborder="0" style="border:0"
        src=<?php echo("https://www.google.com/maps/embed/v1/place?key=AIzaSyC_i7IBlGh9hJ2z7koPfptymRG_Rn1PWYM&q=".$business[getIndexByName("business-address")]); ?> allowfullscreen>
      </iframe>
    </footer>
  </div>
</body>
</html>
