<?php
  $con = mysqli_connect("localhost", "root", "", "social");
  if (mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
  }

  $query = mysqli_query($con, "INSERT INTO test VALUES(NULL, 'Reza')");
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
  <h1>Test</h1>
</body>
</html>