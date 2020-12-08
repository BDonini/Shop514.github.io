<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="nav.css">
  <script defer type="text/javaScript" src="scripts.js"></script>
</head>
<body>
<div id="main">
  <nav>
    <a class="logo" href="Homepage.php"><img src="img/Shop514LogoV2.svg" width="65" height="65"></a>
    <ul>
      <?php
      require("navigation/loggedIn.php");
      ?>
    </ul>
  </nav>
  <div class="formContainer">
    <form action="registerBusiness.php" method="post" id="form">
      <fieldset class="businessField">
        <legend><label class="big_label">Business Information</label></legend>

        <p><label class="big_label">Category</label></p>
        <br>
        <input type="checkbox" name="food" id="food">
        <label for="food" class="info_label">Food Service</label>
        <input type="checkbox" name="clothing" id="clothing">
        <label for="clothing" class="info_label">Clothing</label>
        <input type="checkbox" name="personal-grooming" id="personal grooming">
        <label for="personal grooming" class="info_label">Personal Grooming</label>
        <input type="checkbox" name="artsNrec" id="artsNrec">
        <label for="artsNrec" class="info_label">Arts & Recreation</label>
        <br>
        <br>

        <p><label class="big_label">Basic Information</label></p>
        <br>
        <table class="center">
          <tr>
            <td>
              <label for="business-name" class="info_label">Business Name</label>
            </td>
            <td>
              <input type="text" name="businessName" id="business-name" placeholder="Business Name" required>
            </td>
            <td>
              <label for="business website" class="info_label">Business
                Website</label>
            </td>
            <td>
              <input type="url" name="business-website" id="business website" placeholder="Website url">
            </td>
          </tr>
          <tr>
            <td>
              <label for="phone-number" class="info_label">Phone Number</label>
            </td>
            <td>
              <input type="tel" name="phone-number" id="phone-number" placeholder="Format: 123-456-7890" required>
            </td>
            <td>
              <label for="business instagram" class="info_label">Business Instagram</label>
            </td>
            <td>
              <input type="url" name="business-instagram" id="business instagram" placeholder="Instagram url">
            </td>
          </tr>
          <tr>
            <td>
              <label for="business-email" class="info_label">Business Email</label>
            </td>
            <td>
              <input type="email" name="business-email" id="business-email" placeholder="Business Email" required>
            </td>
            <td>
              <label for="business facebook" class="info_label">Business Facebook</label>
            </td>
            <td>
              <input type="url" name="business-facebook" id="business facebook" placeholder="Facebook url">
            </td>
          </tr>
          <tr>
            <td>
              <label for="business-address" class="info_label">Business Address</label>
            </td>
            <td>
              <input type="text" name="business-address" id="business-address" placeholder="Business Address" required>
            </td>
            <td>
              <label for="business twitter" class="info_label">Business Twitter</label>
            </td>
            <td>
              <input type="url" name="business-twitter" id="business twitter" placeholder="Twitter url">
            </td>
          </tr>
          <tr>
            <td>
              <label for="cover-photo" class="info_label">Image's URL</label>
            </td>
            <td>
              <input type="text" name="image-url" id="cover-photo">
            </td>
            <td><span class="error" id = "result" value=""></span></td>
          </tr>
        </table>
        <br>

        <p><label class="big_label">Hours</label></p>
        <br>
        <table class="center">
          <tr>
            <td>
              <input type="checkbox" name="monday" id="monday">
              <label for="monday" class="info_label">Monday</label>
            </td>
            <td>
              <label for="monOpen" class="info_label">Opening Time</label>
              <input type="time" name="monOpen" id="monOpen">
            </td>
            <td>
              <label for="business name" class="info_label">Closing Time</label>
              <input type="time" name="monClose" id="monClose">
            </td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="tuesday" id="tuesday">
              <label for="tuesday" class="info_label">Tuesday</label>
            </td>
            <td>
              <label for="business name" class="info_label">Opening Time</label>
              <input type="time" name="tuesOpen" id="tuesOpen">
            </td>
            <td>
              <label for="business name" class="info_label">Closing Time</label>
              <input type="time" name="tuesClose" id="tuesClose">
            </td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="wednesday" id="wednesday">
              <label for="wednesday" class="info_label">Wednesday</label>
            </td>
            <td>
              <label for="business name" class="info_label">Opening Time</label>
              <input type="time" name="wedOpen" id="wedOpen">
            </td>
            <td>
              <label for="business name" class="info_label">Closing Time</label>
              <input type="time" name="wedClose" id="wedClose">
            </td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="thursday" id="thursday">
              <label for="thursday" class="info_label">Thursday</label>
            </td>
            <td>
              <label for="business name" class="info_label">Opening Time</label>
              <input type="time" name="thursOpen" id="thursOpen">
            </td>
            <td>
              <label for="business name" class="info_label">Closing Time</label>
              <input type="time" name="thursClose" id="thursClose">
            </td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="friday" id="friday">
              <label for="friday" class="info_label">Friday</label>
            </td>
            <td>
              <label for="business name" class="info_label">Opening Time</label>
              <input type="time" name="friOpen" id="friOpen">
            </td>
            <td>
              <label for="business name" class="info_label">Closing Time</label>
              <input type="time" name="friClose" id="friClose">
            </td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="saturday" id="saturday">
              <label for="saturday" class="info_label">Saturday</label>
            </td>
            <td>
              <label for="business name" class="info_label">Opening Time</label>
              <input type="time" name="satOpen" id="satOpen">
            </td>
            <td>
              <label for="business name" class="info_label">Closing Time</label>
              <input type="time" name="satClose" id="satClose">
            </td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="sunday" id="sunday">
              <label for="sunday" class="info_label">Sunday</label>
            </td>
            <td>
              <label for="business name" class="info_label">Opening Time</label>
              <input type="time" name="sunOpen" id="sunOpen">
            </td>
            <td>
              <label for="business name" class="info_label">Closing Time</label>
              <input type="time" name="sunClose" id="sunClose">
            </td>
          </tr>
        </table>
        <br>

        <p><label class="big_label">Description</label></p>
        <br>
        <textarea id="about business" name="about business"
                  placeholder="Provide any information you'd like to share about your business." rows="10"
                  wrap="soft">
          </textarea>
        <br>
        <br>
        <div class="packages">
          <p><label class="big_label">Package</label></p>
          <br>
          <label for="basic-card">
            <div class="basicCard">
              <p class="cardTitle">Basic</p>
              <img src="img/basicicon.png" width="100px" height="100px">
              <p class="cardTitle">Free</p>
              <p class="cardDescription">
              <ul class="pckgFeatures">
                <li>Get your own business page on our website.</li>
                <li>Your business page is included in our search tool.</li>
              </ul>
              </p>
              <input id="basic-card" name="package" type="radio" value="basic-card">
            </div>
          </label>
          <label for="visibility-card">
            <div class="visibilityCard">
              <p class="cardTitle">Visibility</p>
              <img src="img/visibilityicon.png" width="100px" height="100px">
              <p class="cardTitle">$4.99/mo</p>
              <p class="cardDescription">
              <ul class="pckgFeatures">
                <li>Get your own business page on our website.</li>
                <li>Your business page is included in our search tool.</li>
                <li>Get a spot to advertise your business on our weekly mailing list.</li>
              </ul>
              </p>
              <input id="visibility-card" name="package" type="radio" value="visibility-card">
            </div>
          </label>
          <label for="visibility-plus-card">
            <div class="visibilityPlusCard">
              <p class="cardTitle">Visibility+</p>
              <img src="img/visibilityplusicon.png" width="100px" height="100px">
              <p class="cardTitle">$9.99/mo</p>
              <p class="cardDescription">
              <ul class="pckgFeatures">
                <li>Get your own business page on our website.</li>
                <li>Your business page is included in our search tool.</li>
                <li>Get a spot to advertise your business on our weekly mailing list.</li>
                <li>Business displayed on our homepage map.</li>
                <li>Business featured in our business spotlight.</li>
              </ul>
              </p>
              <input id="visibility-plus-card" name="package" type="radio" value="visibility-plus-card">
            </div>
            <div id="clear"></div>
          </label>
          <br>

          <input type="submit" class="regBtn" value="Register Business"  onclick = "validateBusinessForm()">
        </div>
      </fieldset>
    </form>
  </div>
</div>
</body>
</html>
