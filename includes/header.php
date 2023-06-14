<?php
  require 'config/config.php';

  if (isset($_SESSION['username'])) {
    $userLogggedIn = $_SESSION['username'];  // Get the username
  }
  else {
    header("Location: register.php");  // If the user is not set
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Swirlfeed!</title>
</head>
<body>

