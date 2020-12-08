<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Antonietta</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin="">
        var mymap =null;
    </script>
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
            <h1>Antonietta</h1>
        </div>

    </div>

    <div class="description">

        <section>
            <br />
            <br />
            <br />
            <h2 class="bizPage"> About Us</h2>
            <hr>
            <p class="p1">

                Located near Papineau and Beaubien, we're a small neighbourhood restaurant
                serving true Italian cooking, using the Canadian seasons.
                <br><br>
                Come see our friendly staff and try our amazing wood oven pizza or our fresh pasta to get a taste
                of Italy right here in Montreal.
                <br><br>
                Unfortunately to help serve you better during these difficult times, we're only opened from
                Thursday to Saturday and do not accept reservations of more than 6 people.

            </p>
            <div class="social-media">
                <br /><br /><br /><br />
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-globe"></i></a></li>

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
                    <tr>
                        <td>	Monday 	</td>
                        <td class="time">	Closed	</td>
                    </tr>
                    <tr>
                        <td>	Tuesday	</td>
                        <td class="time">	Closed	</td>
                    </tr>
                    <tr>
                        <td>	Wednesday	</td>
                        <td class="time">	Closed	</td>
                    </tr>

                    <tr>
                        <td>	Thursday	</td>
                        <td class="time">	17:00 - 21:00	</td>
                    </tr>
                    <tr>
                        <td>	Friday	</td>
                        <td class="time">	17:00 - 21:00	</td>
                    </tr>
                    <tr>
                        <td>	Saturday	</td>
                        <td class="time">	17:00 - 21:00	</td>
                    </tr>
                    <tr>
                        <td>	Sunday	</td>
                        <td class="time">	Closed	</td>
                    </tr>

                </table>
            </div>

            <div class="star-widget">

                <br />
                <br />
                <br />
                <h2 class="bizPage"> Rating </h2>
                <hr>
                <br />
                <br />
                <input type="radio" name="rate" id="rate-1" />
                <label for="rate-1"></label>
                <input type="radio" name="rate" id="rate-2" />
                <label for="rate-2"></label>
                <input type="radio" name="rate" id="rate-3" />
                <label for="rate-3"></label>
                <input type="radio" name="rate" id="rate-4" />
                <label for="rate-4"></label>
                <input type="radio" name="rate" id="rate-5" />
                <label for="rate-5"></label>
            </div>

            <div class="Reviews">
                <br />
                <br />
                <br />
                <h2 class="bizPage"> Reviews </h2>
                <hr>
                <br />
                <br />

                <table class="revTable">
                    <th></th>
                    <td></td>


                </table>
            </div>


        </aside>

        <footer class="map">
            <br /><br /><br /><br /> <br /><br /><br /><br />

            <div id="mapid" style="width: 600px; height: 400px;"></div>
            <script type="text/javascript">

                //Initialize Map
                var ResLat = 45.516290;
                var ResLong = -73.643490;


                mymap = L.map('mapid').setView([ResLat, ResLong], 14.5);
                L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                maxZoom: 18,
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1
                }).addTo(mymap);

                var marker=L.marker([ResLat,ResLong]).addTo(mymap);
                /*var circle =L.circle([ResLat,ResLong], {
                color:'green',
                radius:1000,
                fillOpacity:0.5,
                fillColor: 'green'}
                ).addTo(mymap);*/

            </script>
        </footer>
    </div>
</body>
</html>
