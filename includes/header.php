<?php
  require 'config/config.php';

  if (isset($_SESSION['username'])) {
    $userLogggedIn = $_SESSION['username'];  // Get the username
    $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLogggedIn'");
    $user = mysqli_fetch_array($user_details_query); // Returns all of the columns in the table for that user as an array
  }
  else {
    header("Location: register.php");  // If the user is not set redirect to the register page
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Swirlfeed!</title>

  <!-- Javascript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  
  <!-- CSS -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

<div class="top-bar">
  <div class="logo">
    <a href="index.php">Swirlfeed</a>
  </div>

  <nav>
    <a href="<?php echo $userLogggedIn; ?>">
      <?php echo $user['first_name']; ?>
    </a>
    <a href="index.php">
      <i class="fa fa-home fa-lg"></i>
    </a>
    <a href="#">
      <i class="fa fa-envelope fa-lg"></i>
    </a>
    <a href="#">
      <i class="fa fa-bell-o fa-lg"></i>
    </a>
    <a href="#">
				<i class="fa fa-users fa-lg"></i>
    </a>
    <a href="#">
      <i class="fa fa-cog fa-lg"></i>
    </a>
    <a href="includes/handlers/logout.php">
      <i class="fa fa-sign-out fa-lg"></i>
    </a>
  </nav>
</div>

<div class="wrapper">