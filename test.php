<div class="formContainer">
  <form action="" id="form">
    <div class="formDiv">

      <div class="category">

        <label class="big_label">
          Business Category<span class="required"> *</span>
        </label>
        <!--<label for="business categories" class="info_label">Select all that apply</label>
        <select class="catDrop" name="business categories" id="business categories" multiple>
          <option value="food service">Food Service</option>
          <option value="grocery">Grocery</option>
          <option value="clothing">Clothing</option>
          <option value="entertainment">Entertainment</option>
          <option value="personal grooming">Personal Grooming</option>
          <option value="arts and rec">Arts & Recreation</option>
        </select> -->
        <div>
          <input type="checkbox" name="food" id="food" checked>
          <label for="food" class="info_label">Food Service</label>
          <input type="checkbox" name="clothing" id="clothing">
          <label for="clothing" class="info_label">Clothing</label>
          <input type="checkbox" name="personal grooming" id="personal grooming">
          <label for="personal grooming" class="info_label">Personal Grooming</label>
          <input type="checkbox" name="artsNrec" id="artsNrec">
          <label for="artsNrec" class="info_label">Arts & Recreation</label>
        </div>
      </div>

      <div class="services">

        <label class="big_label">
          Available Services<span class="required"> *</span>
        </label>
        <div>
          <input type="checkbox" name="in-store pick-up" id="in-store pick-up" checked>
          <label for="in-store pick-up" class="info_label">In-store pick-up</label>
          <input type="checkbox" name="home deliveries" id="home deliveries">
          <label for="home deliveries" class="info_label">Home Deliveries</label>
          <input type="checkbox" name="online orders" id="online orders">
          <label for="online orders" class="info_label">Online orders</label>
          <input type="checkbox" name="phone orders" id="phone orders">
          <label for="phone orders" class="info_label">Phone orders</label>
        </div>
      </div>

      <div class="business_info">

        <label class="big_label">
          Business Information
        </label>

        <table class="center">
          <tr>
            <td>
              <table>

                <tr>
                  <td>
                    <label for="business-name" class="info_label">Business Name<span
                        class="required"> *</span> </label>
                  </td>
                  <td>
                    <input type="text" name="business-name" id="business-name"
                           placeholder="Business Name" required>

                  </td>

                </tr>
                <tr>
                  <td>
                    <label for="phone-number" class="info_label">Phone Number<span
                        class="required"> *</span> </label>
                  </td>
                  <td>
                    <input type="tel" name="phone-number" id="phone-number"
                           placeholder="Format: 123-456-7890" required>
                  </td>
                </tr>

                <tr>
                  <td>
                    <label for="business-email" class="info_label">Business Email<span
                        class="required"> *</span> </label>
                  </td>
                  <td>
                    <input type="email" name="business-email" id="business-email"
                           placeholder="business-email" required>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="business-address" class="info_label">Business Address<span
                        class="required"> *</span> </label>
                  </td>
                  <td>
                    <input type="text" name="business-address" id="business-address"
                           placeholder="Business Address" required>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="cover photo" class="info_label">Cover Photo<span
                        class="required"> *</span> </label>
                  </td>
                  <td>
                    <input type="file" accept="image/png, image/jpeg" name="cover-photo"
                           id="cover-photo">

                  </td>
                </tr>
              </table>
            </td>
            <td>
              <table>

                <tr>
                  <td>
                    <label for="business website" class="info_label">Business
                      Website</label>
                  </td>
                  <td>
                    <input type="url" name="business website" id="business website"
                           placeholder="Website url">

                  </td>

                </tr>
                <tr>
                  <td>
                    <label for="business instagram" class="info_label">Business
                      Instagram</label>
                  </td>
                  <td>
                    <input type="url" name="business instagram" id="business instagram"
                           placeholder="Instagram url">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="business facebook" class="info_label">Business
                      Facebook</label>
                  </td>
                  <td>
                    <input type="url" name="business facebook" id="business facebook"
                           placeholder="Facebook url">
                  </td>
                </tr>

                <tr>
                  <td>
                    <label for="business twitter" class="info_label">Business
                      Twitter</label>
                  </td>
                  <td>
                    <input type="url" name="business twitter" id="business twitter"
                           placeholder="Twitter url">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="business keys" class="info_label">Keywords</label>
                  </td>
                  <td>
                    <input type="text" name="business keys" id="business keys"
                           placeholder="Keywords for Search">
                  </td>
                </tr>

              </table>
            </td>
          </tr>

        </table>
        <p id="result" class="center"></p>
        <br><br>

        <!--
        <div>
            <label>Recive Emails:</label>
            <input type="radio" name="all updates" id="all updates" value="all updates" checked>
            <label for="all updates">All updates</label>

            <input type="radio" name="important updates" id="important updates"
                value="important updates">
            <label for="important updates">Important updates</label>
        </div>

    -->

        <label class="big_label">
          Business Hours<span class="required"> *</span>
        </label>

        <table class="center">
          <tr>
            <td><input type="checkbox" name="monday" id="monday" checked>
              <label for="monday" class="info_label">Monday</label></td>
            <td> <label for="monOpen" class="info_label">Opening Time</label>
              <input type="time" name="monOpen" id="monOpen" placeholder="7:00"></td>
            <td><label for="business name" class="info_label">Closing Time</label>
              <input type="time" name="monClose" id="monClose" placeholder="21:00"></td>
          </tr>
          <tr>
            <td><input type="checkbox" name="tuesday" id="tuesday" checked>
              <label for="tuesday" class="info_label">Tuesday</label></td>
            <td><label for="business name" class="info_label">Opening Time</label>
              <input type="time" name="tuesOpen" id="tuesOpen" placeholder="7:00"></td>
            <td> <label for="business name" class="info_label">Closing Time</label>
              <input type="time" name="tuesClose" id="tuesClose" placeholder="21:00"></td>
          </tr>
          <tr>
            <td><input type="checkbox" name="wednesday" id="wednesday" checked>
              <label for="wednesday" class="info_label">Wednesday</label></td>
            <td><label for="business name" class="info_label">Opening Time</label>
              <input type="time" name="wedOpen" id="wedOpen" placeholder="7:00"></td>
            <td><label for="business name" class="info_label">Closing Time</label>
              <input type="time" name="wedClose" id="wedClose" placeholder="21:00"></td>
          </tr>
          <tr>
            <td><input type="checkbox" name="thursday" id="thursday" checked>
              <label for="thursday" class="info_label">Thursday</label></td>
            <td><label for="business name" class="info_label">Opening Time</label>
              <input type="time" name="thursOpen" id="thursOpen" placeholder="7:00"></td>
            <td>
              <label for="business name" class="info_label">Closing Time</label>
              <input type="time" name="thursClose" id="thursClose" placeholder="21:00"></td>
          </tr>
          <tr>
            <td><input type="checkbox" name="friday" id="friday" checked>
              <label for="friday" class="info_label">Friday</label></td>
            <td><label for="business name" class="info_label">Opening Time</label>
              <input type="time" name="friOpen" id="friOpen" placeholder="7:00"></td>
            <td><label for="business name" class="info_label">Closing Time</label>
              <input type="time" name="friClose" id="friClose" placeholder="21:00"></td>
          </tr>
          <tr>
            <td><input type="checkbox" name="saturday" id="saturday">
              <label for="saturday" class="info_label">Saturday</label></td>
            <td><label for="business name" class="info_label">Opening Time</label>
              <input type="time" name="satOpen" id="satOpen" placeholder="7:00"></td>
            <td><label for="business name" class="info_label">Closing Time</label>
              <input type="time" name="satClose" id="satClose" placeholder="21:00"></td>
          </tr>
          <tr>
            <td><input type="checkbox" name="sunday" id="sunday">
              <label for="sunday" class="info_label">Sunday</label></td>
            <td><label for="business name" class="info_label">Opening Time</label>
              <input type="time" name="sunOpen" id="sunOpen" placeholder="7:00"></td>
            <td><label for="business name" class="info_label">Closing Time</label>
              <input type="time" name="sunClose" id="sunClose" placeholder="21:00"></td>
          </tr>
        </table>

      </div><br><br>
      <div>
        <label class="big_label">
          Business Description
        </label>

        <textarea id="about business" name="about business"
                  placeholder="Provide any information you'd like to share about your business." rows="10"
                  wrap="soft"></textarea>
      </div>
      <div>
        <br>
        <button class=button2 type="submit" onclick="validateBusinessForm();">Update</button>
        <button class=button2 type="reset">Reset</button>
      </div>
    </div>

  </form>
</div>
<p class="pckgHeader">
  Choose Your Plan
</p>
<div class="packages">
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
    <p><button class="button1">Owned</button></p>
  </div>
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
    <p><a href="payment-page.php"><button class="button1">Purchase</button></a></p>
  </div>
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
    <p><a href="payment-page.php" target="_blank"><button class="button1">Purchase</button></a></p>
  </div>
  <div id="clear"></div>
  <div class="basicCard">
    <p class="cardTitle">Basic</p>
    <img src="img/basicicon-orange.png" width="100px" height="100px">
    <p class="cardTitle">Free</p>
    <p class="cardDescription">
    <ul class="pckgFeatures">
      <li>Get your own business page on our website.</li>
      <li>Your business page is included in our search tool.</li>
    </ul>
    </p>
    <p><button class="button1">Owned</button></p>
  </div>
  <div class="visibilityCard">
    <p class="cardTitle">Visibility</p>
    <img src="img/visibilityicon-orange.png" width="100px" height="100px">
    <p class="cardTitle">$4.99/mo</p>
    <p class="cardDescription">
    <ul class="pckgFeatures">
      <li>Get your own business page on our website.</li>
      <li>Your business page is included in our search tool.</li>
      <li>Get a spot to advertise your business on our weekly mailing list.</li>
    </ul>
    </p>
    <p><a href="payment-page.html"><button class="button1">Purchase</button></a></p>
  </div>
  <div class="visibilityPlusCard">
    <p class="cardTitle">Visibility+</p>
    <img src="img/visibilityplusicon-orange.png" width="100px" height="100px">
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
    <p><a href="payment-page.html" target="_blank"><button class="button1">Purchase</button></a></p>
  </div>
  <div id="clear"></div>
</div>
<div class="submitSuccess">
  <form class="success">
    <p class="pckgHeader">Submit Your Success Story</p><br>
    <label for="success owner" class="info_label">Your Name</label>
    <input type="text" id="success owner" name="success owner" placeholder="Owner Name"><br>
    <label for="success name" class="info_label">Your Business</label>
    <input type="text" id="success name" name="success name" placeholder="Business Name"><br>
    <textarea id="success story" name="success story"
              placeholder="Tell us about your business' success on Shop514" rows="10" wrap="soft"></textarea>
    <div class="centerButton"><button type="submit" class="button2">Submit</button></div>
  </form>
</div>