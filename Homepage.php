<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Shop514</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>-->
    <!--<link rel="stylesheet" href="homeStyle.css">-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sstories.css">
    <link rel="stylesheet" href="spotlight.css">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin="">
    var mymap = null;
    </script>



</head>

<body>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    <div id="main">
        <nav>
            <a class="logo" href="Homepage.php"><img src="img/Shop514LogoV2.svg" width="65" height="65"></a>
            <ul>
                <?php

$nameEntry = $emailEntry = "";
$nameEntryErr = $emailEntryErr = "";
$GLOBALS['$emailExist'] = false;
$GLOBALS['$emailEntryExi'] = false;



if (isset($_SESSION["usermail"])) {
    //echo("is set");
    require "navigation/loggedIn.php";
} else {
    require "navigation/loggedOut.php";
}

if (isset($_POST["submitBtn"])) {


    $cat = $_POST['cat'];
  if(empty($cat))
  {
  //  echo("You didn't select any cat.");
  }
  else
  {
    $N = count($cat);

  //  echo("You selected $N cat(s): ");
    for($i=0; $i < $N; $i++)
    {
 //     echo($cat[$i] . " ");
    }
  }


    if (empty($_POST["nameEntry"])) {
        $nameEntryErr = "name is required";
    } else {
        $nameEntry = test_input($_POST["nameEntry"]);

        if (!preg_match("/^[a-zA-Z0-9-']*$/", $nameEntry)) {
            $nameEntryErr = "Only letters and numbers allowed";
        }
    }

    if (empty($_POST["emailEntry"])) {
        $emailEntryErr = "email is required";
    } else {
        $emailEntry = test_input($_POST["emailEntry"]);

        if (!preg_match("/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD", $emailEntry)) {
            $emailEntryErr = "Please enter a valid email number";
        }
    }

    if ($nameEntryErr == "" and $emailEntryErr == "") {

        //
        if (!emailExists($emailEntry, $nameEntry)) {

          //  echo ("dont exist" . "<br>");
            sendEmail($emailEntry, $nameEntry);

        } else {
            sendAd();
          //  echo ("exist!!" . "<br>");
        }
    }
}
// here
function sendEmail($emailEntry, $nameEntry)

{
    //echo("sendEmail");
    include 'mailerTemplate.php';

    $mail->addAddress($emailEntry, $nameEntry);

    $mail->Subject = 'Successfully subscribed';

    $bodyString = nl2br("Dear " . $nameEntry . ", Successfully subscribed to the news letter\n\nBest regards, \n\nShop514 Administrator");

    $mail->Body = $bodyString;

    $mail->addAttachment("img/email/welcome.png", "welcome.png");

    //send the message, check for errors
    if (!$mail->send()) {
      //  echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
      //  echo 'Message was sent Successfully!';
    }

    //header("Location: process.php");
}

function sendAd()
{
    //echo("sendAd");
    include 'mailerTemplate.php';
    if (file_exists('newsletterlist.txt')) {
        if ($fh = fopen('newsletterlist.txt', 'a+')) {

            $file_lines = file('newsletterlist.txt');

            foreach ($file_lines as $line) {
                $lineArray = explode(" ", $line);

                $mail->addAddress($lineArray[0], $lineArray[1]);
               // echo("sending email: " . $lineArray[0] );
                $mail->Subject = 'Sales!';
                $bodyString = nl2br("Dear " .$lineArray[1] .", We are glad to announce or 99.9% sale today\n\nBest regards,\nShop514 Administrator");

                $mail->Body = $bodyString;

                $mail->addAttachment("img/email/logo.png", "shop415.png");

                //send the message, check for errors
                if (!$mail->send()) {
                    // echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    //  echo 'Message was sent Successfully!';
                }

            }
            fclose($fh);
        }
    }
}

// if email exist dont do any thing
function emailExists($emailEntry, $nameEntry)
{

    if (file_exists('newsletterlist.txt')) {
        if ($fh = fopen('newsletterlist.txt', 'a+')) {

            $file_lines = file('newsletterlist.txt');

            foreach ($file_lines as $line) {
                $lineArray = explode(" ", $line);

                if ($lineArray[0] == $emailEntry) {

                    $GLOBALS['$emailExist'] = true;

                    //echo ("exist!!" . "<br>");

                    $GLOBALS['$emailEntryExi'] = "You are already subscribed";
                    break;

                } else {
                    // email does not exist

                    $GLOBALS['$emailEntryExi'] = "You are successfully subscribed, please check your email";

                }

            }

            if (!$GLOBALS['$emailExist']) {

                $record = "\n" . $emailEntry . " " . $nameEntry;
                $cat = $_POST['cat'];
                if(empty($cat))
                {
                //  echo("You didn't select any cat.");
                }
                else
                {
                  $N = count($cat);

                //  echo("You selected $N cat(s): ");
                  for($i=0; $i < $N; $i++)
                  {
                    // echo($cat[$i] . " ");
                    $record = $record. " ". $cat[$i];
                  }
                }


                // add the email to the list
                fwrite($fh, "\n" . $record);
            }

            fclose($fh);
            return $GLOBALS['$emailExist'];
        }

    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
            </ul>
        </nav>

        <div class="head">
            <img src="img/Shop514LogoV2.svg" class="headLogo" width="250" height="250">
            <!--<h1>Welcome to Shop514</h1>
      <h2>The Best Spot to Support Montreal Area Business</h2>-->
            <div class="desc">
                <h3>When you buy from a local business, you're not helping a CEO buy a 3rd holiday home.
                    You're helping a little kid sign up for activities, a mom or dad put food on the table, a family pay
                    their mortgage,
                    and a student pay for college.</h3>
                <!--<h3>COVID-19 has been tough on all of us but it's taken a huge toll on local businesses. Many of them are
          family owned and struggling to survive through this pandemic. By supporting your local businesses,
          you can buy what you need while helping local families keep their livelihoods.
          Jeff Bezos and Amazon have enough money, let's work together to help Montreal area families get through this difficult time.</h3>
          -->
            </div>
        </div>
        <div class="bizContainer">
            <div class="map">
                <h2 class="mapTitle">Your Local Businesses</h2>
                <div id="mapid" style="width: 600px; height: 400px;"></div>
                <script type="text/javascript">
                //Initialize Map
                var ResLat = 45.516290;
                var ResLong = -73.643490;

                var locations = [
                  ["Antonietta Osteria Italiana<br>6672 Avenue Papineau,Montreal,Quebec H2G 2X2",45.54497,-73.59975],
                  ["Citizen Vintage<br>5330 St Laurent Blvd,Montreal,Quebec H2T 1S1",45.52485,-73.59665],
                  ["Hair Salon Spa Deauville<br>4048 Rue Jean-Talon O,Montreal,Quebec H4P 1V5",45.50152,-73.64550],
                ];


                mymap = L.map('mapid').setView([ResLat, ResLong], 12);
                L.tileLayer(
                    'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                        maxZoom: 18,
                        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                        id: 'mapbox/streets-v11',
                        tileSize: 512,
                        zoomOffset: -1
                    }).addTo(mymap);

                    for(var i=0; i < locations.length; i++)
                    {
                      marker = new L.marker([locations[i][1], locations[i][2]])
                      .bindPopup(locations[i][0])
                      .addTo(mymap);
                    }
                //var marker = L.marker([ResLat, ResLong]).addTo(mymap);
                /*var circle =L.circle([ResLat,ResLong], {
                color:'green',
                radius:1000,
                fillOpacity:0.5,
                fillColor: 'green'}
                ).addTo(mymap);*/
                </script>
            </div>
            <div class="business_spotlight">
                <h2 class="biz_spot_title">Business Spotlight</h2>
              <div class="spotlight">
                <h3 class="biz_name">Antonietta Osteria Italiana</h3>
                <p class="biz_desc">Food Service</p>
                <a href="business_page.php?businessName=Antonietta%20Osteria">
                    <img src="img/antonietta.png" class="biz_pic" alt="local business" width="400" height="267">
                </a>
              </div>
              <div class="spotlight">
                <h3 class="biz_name">Citizen Vintage</h3>
                <p class="biz_desc">Clothing</p>
                <a href="business_page.php?businessName=Citizen%20Vintage">
                  <img src="https://images.pexels.com/photos/4301252/pexels-photo-4301252.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" class="biz_pic" alt="local business" width="267" height="400">
                </a>
              </div>
              <div class="spotlight">
                <h3 class="biz_name">Spa Deauville</h3>
                <p class="biz_desc">Personal Grooming</p>
                <a href="business_page.php?businessName=Spa%20Deauville">
                  <img src="https://images.pexels.com/photos/1029803/pexels-photo-1029803.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" class="biz_pic" alt="local business" width="267" height="400">
                </a>
              </div><br>
              <div class="dot2-container">
                <span class="dot2"></span>
                <span class="dot2"></span>
                <span class="dot2"></span>
              </div>
            </div>
            <div id="clear"></div>
        </div>
        <div class="newsletter">
            <form method="POST" class="newsletForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <fieldset class="newslet">
                    <legend>
                        <h3 class="news_title">Newsletter</h3>
                    </legend>
                    <div class="name">
                        <label for="nameEntry" class="info_label">Name</label><br>
                        <input type="text" id="nameEntry" size="30" name="nameEntry" value="<?php if (isset($_POST['nameEntry'])) {
    echo $_POST['nameEntry'];
}
?>">
                        <br><br>
                        <span class="error"><?php echo $nameEntryErr; ?></span>
                    </div>


                    <div class="email">
                        <label for="emailEntry" class="info_label">Email Address</label><br>
                        <input type="text" id="emailEntry" size="30" name="emailEntry" value="<?php if (isset($_POST['emailEntry'])) {
    echo $_POST['emailEntry'];
}
?>">
                    </div>
                    <div>
                        <br>
                        <span class="error"><?php echo $emailEntryErr; ?></span>
                        <span class="hint"><?php echo $GLOBALS['$emailEntryExi']; ?></span>

                    </div>
                    <div class="preferences">
                        <br>
                        <label class="pref-title">Select Your Preferences</label><br>
                        <input type="checkbox" id="food service" name="cat[]" value = "food" checked>
                        <label for="food service" class="info_label">Food Service</label>
                        <input type="checkbox" id="clothing" name="cat[]" value = "cloth" >
                        <label for="clothing" class="info_label">Clothing</label>
                        <input type="checkbox" id="personal grooming" name="cat[]" value = "groom" >
                        <label for="personal grooming" class="info_label">Personal Grooming</label>
                        <input type="checkbox" id="artsNrec" name="cat[]" value = "art" >
                        <label for="artsNrec" class="info_label">Arts & Recreation</label>
                    </div>
                    <div class="submitBtn">
                        <br>
                        <input class="button1" name="submitBtn" value="Subscribe" type="submit" id="submitBtn"
                            <?php if (isset($_POST["submitBtn"])) {echo ("autofocus");}?>>
                    </div>
                    <br>
                    <h3 class="newsletterInfo">Subscribe to our newsletter to receive the latest updates and promotions
                        from
                        our featured Montreal businesses</h3>
                </fieldset>
            </form>
        </div>

            <div class="successStories">
              <h2>Shop514 Success Stories</h2>
                <div class="successBox">

                  <div class="story">
                    <br><h3 class="successOwner">Antionetta Amato</h3>
                    <h3 class="successBiz">Antonietta Osteria</h3>
                    <br><p class="successText">Shop514 gave me the exposure I needed to help get my business through this pandemic!
                      It's great for small business owners like me to have this free platform to expand the reach of my business
                      and grow my clientele in a time where it's difficult to have much in-store traffic!</p>
                  </div>

                  <div class="story">
                    <br><h3 class="successOwner">Lara and Becky</h3>
                    <h3 class="successBiz">Citizen Vintage</h3>
                    <br><p class="successText">When it comes to a small local business like us, it can be hard to pull in new clientele...
                      During these times, it becomes even harder and Shop514 has greatly helped us get the word out: "We're here and open
                      for business". Our profits have in turn gone up and we could not be happier. Thank you!</p>
                  </div>

                  <div class="story">
                    <br><h3 class="successOwner">Olivier Beausecour</h3>
                    <h3 class="successBiz">Contemporary Art Gallery</h3>
                    <br><p class="successText">A million thanks to Shop514 for giving my gallery the extra boosting it needed!
                      This pandemic has taken a huge hit on my business, and with the help of Shop514 I have been able to keep
                      a steady clientele and promote the vast amount of art in my disposal!</p>
                  </div>

                  <div class="story">
                    <br><h3 class="successOwner">Claudia Iacono</h3>
                    <h3 class="successBiz">Hair Salon Spa Deauville</h3>
                    <br><p class="successText">Couldn't have asked for a better company to help promote my business, Shop514
                      is great at what they do and has really put us on the map! Business is booming even through these hard
                      times, and its all thanks to the extra assistance that Shop514 has provided us with.</p>
                  </div>

                  <div class="story">
                    <br><h3 class="successOwner">Sebastien Allard</h3>
                    <h3 class="successBiz">Duc de Lorraine</h3>
                    <br><p class="successText">Putting my small Parisian-style pastry shop on Shop514's site was a decision
                      that I will never regret. It has brought me a new wave of customers from the regulars we are accustomed
                      to and I am ever so thankful for that. If you have a local business in need of some extra promotion,
                      go with Shop514, you will not be disappointed!</p>
                  </div>

                  <div class="dot-container">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                  </div>

              </div>
            </div>
            <br>
           <script type="text/javascript" src="sstories.js"></script>
            <script type="text/javascript" src="spotlight.js"></script>
          </div>
</body>

</html>
