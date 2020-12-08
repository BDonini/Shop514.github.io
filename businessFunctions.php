<?php
  function getBusinesses() {
    $businesses = Array();
    $temp = explode("\n", file_get_contents('businesses.txt'));
    foreach ($temp as $aString) {
      array_push($businesses, explode(",", $aString));
    }
    array_pop($businesses);
    return $businesses;
  }

  function getBusinessByName($businessName) {
    $businesses = getBusinesses();
    foreach ($businesses as $aBusiness) {
      if ($businessName === $aBusiness[1]) {
        return $aBusiness;
      }
    }
    return FALSE;
  }

  function getIndexByName($name) {
    $nameToIndex = Array(
      "usermail" => 0,
      "businessName" => 1,
      "phone-number" => 2,
      "business-website" => 3,
      "business-instagram" => 4,
      "business-email" => 5,
      "business-facebook" => 6,
      "business-address" => 7,
      "business-twitter" => 8,
      "food" => 9,
      "clothing" => 10,
      "personal_grooming" => 11,
      "artsNrec" => 12,
      "monday" => 13,
      "tuesday" => 14,
      "wednesday" => 15,
      "thursday" => 16,
      "friday" => 17,
      "saturday" => 18,
      "sunday" => 19,
      "image-url" => 20,
      "package" => 21
    );
    return $nameToIndex[$name];
  }
?>