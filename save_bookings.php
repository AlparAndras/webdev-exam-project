<?php

  $sBookings = file_get_contents("bookings.json");
  $aBookings = json_decode($sBookings);

  $newBooking = new stdClass();
  $sFirstName = $_POST["firstName"];
  $sLastName = $_POST["lastName"];
  $sEmail = $_POST["email"];
  $sDate = $_POST["date"];
  $sTime = date("h:i:sa");
  $sCount = $_POST["count"];


  $newBooking->id = uniqid();
  $newBooking->firstName = $sFirstName;
  $newBooking->lastName = $sLastName;
  $newBooking->email = $sEmail;
  $newBooking->date = $sDate;
  $newBooking->time = $sTime;
  $newBooking->count = $sCount;

  array_push($aBookings, $newBooking);
  $sConvertToFile = json_encode($aBookings);
  file_put_contents("bookings.json", $sConvertToFile);

  echo "saved";

?>
