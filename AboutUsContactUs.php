<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>About/Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="nav.css">
    <script defer type="text/javaScript" src="scripts.js"></script>

</head>

<body>

    <div id="main">

        <nav>
            <a class="logo" href="Homepage.php"><img src="img/Shop514LogoV2.svg" width="65" height="65"></a>
            <ul>
                <?php
if (isset($_SESSION["usermail"])) {
    require "navigation/loggedIn.php";
} else {
    require "navigation/loggedOut.php";
}
?>


<?php

$fNname = $lname = $email = $pNumber = $subject = "";

$GLOBALS['$emailExist'] = false;
$GLOBALS['$emailEntryExi'] = false;

if (isset($_POST["Submit"])) {

    if (empty($_POST["firstname"])) {
        $nameEntryErr = "first name is required";
    } else {
        $nameEntry = test_input($_POST["firstname"]);

        if (!preg_match("/^[a-zA-Z0-9-']*$/", $nameEntry)) {
            $nameEntryErr = "Only letters and numbers allowed";
        }
    }

    if (empty($_POST["lasttname"])) {
      $nameEntryErr = "last name is required";
  } else {
      $nameEntry = test_input($_POST["lasttname"]);

      if (!preg_match("/^[a-zA-Z0-9-']*$/", $nameEntry)) {
          $nameEntryErr = "Only letters and numbers allowed";
      }
  }


    if (empty($_POST["email"])) {
        $emailEntryErr = "email is required";
    } else {
        $emailEntry = test_input($_POST["email"]);

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


?>



            </ul>
        </nav>

        <div class="about-section">
            <h2 class="team">About Us</h2></br>
            <h3 class="about-desc">COVID-19 has been tough on all of us but it's taken a huge toll on local businesses.
                Many
                of them are
                family owned and struggling to survive through this pandemic. Our goal was to create a platform designed
                for
                these
                struggling small businesses to promote themselves and gain visibility. Shop514 brings many local
                Montreal Area
                businesses
                together in one place for Montrealers to find them and support them in these difficult times. By
                supporting your
                local businesses,
                you can buy what you need while helping local families keep their livelihoods.
                Jeff Bezos and Amazon have enough money, let's work together to help Montreal area families get through
                this
                difficult time.</h3>
        </div>

        </br>

        <div>
            <div>
                </br>

                <div class="teamDiv">
                    <h2 class="team">Our Team</h2>

                    <div class="row">
                        <div class="column">
                            <div class="card">
                                <!--img src="https://www1.specialolympicsontario.com/wp-content/uploads/2017/01/Insert-Photo-Here.jpg" alt="Brandon" style="width:100%"-->
                                <div class="container">
                                    <h2 class="teamNames">Brandon Donini</h2>
                                    <p>Front End Developer<br><br>
                                      -Framework of homepage<br>
                                      -Final HTML/CSS result<br>
                                      -Added Js/PHP functionalities<br>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="column">
                            <div class="card">
                                <!--img src="https://www1.specialolympicsontario.com/wp-content/uploads/2017/01/Insert-Photo-Here.jpg" alt="Raisa" style="width:100%"-->
                                <div class="container">
                                    <h2 class="teamNames">Raisa Vovcioc</h2>
                                  <p>Backend End Developer<br><br>
                                    -Framework of business page<br>
                                    -Login/register PHP functionalities<br>
                                    -The SQL that was decidedly removed<br>
                                  </p>
                                </div>
                            </div>
                        </div>

                        <div class="column">
                            <div class="card">
                                <!--img src="https://www1.specialolympicsontario.com/wp-content/uploads/2017/01/Insert-Photo-Here.jpg" alt="Georgia" style="width:100%"-->
                                <div class="container">
                                    <h2 class="teamNames">Georgia Bardaklis</h2>
                                  <p>Back End Developer<br><br>
                                    -Framework of about/contact page<br>
                                    -Map pin functionality, dynamic success stories<br>
                                    -The SQL that was decidedly removed<br>
                                  </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <!--img src="https://www1.specialolympicsontario.com/wp-content/uploads/2017/01/Insert-Photo-Here.jpg" alt="Sangwoo" style="width:100%"-->
                            <div class="container">
                                <h2 class="teamNames">Sangwoo Han</h2>
                              <p>Back End Developer<br><br>
                                -Framework of login/register pages<br>
                                -Business/Search page functionality<br>
                                -Dynamic nav bar<br>
                              </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <!--img src="https://www1.specialolympicsontario.com/wp-content/uploads/2017/01/Insert-Photo-Here.jpg" alt="Liliana" style="width:100%"-->
                        <div class="container">
                            <h2 class="teamNames">Lilianna Chen</h2>
                          <p>Front End Developer<br><br>
                            -Framework of search page<br>
                            -Final HTML/CSS result<br>
                            -Payment page functionalities<br>
                          </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <!--img src="https://www1.specialolympicsontario.com/wp-content/uploads/2017/01/Insert-Photo-Here.jpg" alt="Ibrahim" style="width:100%"-->
                    <div class="container">
                        <h2 class="teamNames">Ibrahim Ibrahim</h2>
                      <p>Front End Developer<br><br>
                        -Framework of business account page<br>
                        -Javascript validations<br>
                        -Mailer functionalities for newsletter and contact us<br>
                      </p>
                    </div>
                </div>
            </div>
            <br><br>
        </div>

        <h1 class="title">Contact Us</h1>

        <div class="centerForm">
            <div class="contactContainer">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form">
                    <table>
                        <tr>
                            <td>
                                <label for="fname" class="info_label">First Name<span class="required"> *</span>
                                </label>
                            </td>
                            <td>
                                <input type="text" class="textInput" name="firstname" id="fname"
                                    placeholder="Your Name..." required <?php if (isset($_POST['firstname'])) {
    echo $_POST['firstname'];
}
?>">
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <label for="lname" class="info_label">Last Name<span class="required"> *</span> </label>
                            </td>
                            <td>
                                <input type="text" class="textInput" name="lastname" id="lname"
                                    placeholder="Your Last Name..." required value="<?php if (isset($_POST['lastname'])) {
    echo $_POST['lastname'];
}
?>">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="email" class="info_label">Email Address<span class="required"> *</span>
                                </label>
                            </td>
                            <td>
                                <input type="text" class="textInput" name="email" id="email"
                                    placeholder="Your Email Address..." required value="<?php if (isset($_POST['email'])) {
    echo $_POST['email'];
}
?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="pnumber" class="info_label">Phone Number<span class="required"> *</span>
                                </label>
                            </td>
                            <td>
                                <input type="text" class="textInput" name="phonenumber" id="pnumber"
                                    placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required value="<?php if (isset($_POST['phonenumber'])) {
    echo $_POST['phonenumber'];
}
?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="subject" class="info_label">Subject<span class="required"> *</span> </label>
                            </td>
                            <td>
                                <textarea class="textarea1" id="subject" name="subject"
                                    placeholder="Share the purpose for contacting us and any concerns or help you may need."
                                    style="height:200px" required value="<?php if (isset($_POST['subject'])) {
    echo $_POST['subject'];
}
?>"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="centerButton"><input class="button2" type="button" id="submit"
                                        value="Submit" onclick="validateContactForm()"></div>
                            </td>
                            <td>
                                <p id="result"></p>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>


    </div>
</body>

</html>
