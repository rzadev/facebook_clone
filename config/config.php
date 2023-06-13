<?php
  ob_start(); // Turns on output buffering
  session_start(); //Store the values of the variables inside the session variable. Keep the valid values in the form

  $timezone = date_default_timezone_set("Asia/Jakarta");
  $con = mysqli_connect("localhost", "root", "", "social");
  if (mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
  }
?>