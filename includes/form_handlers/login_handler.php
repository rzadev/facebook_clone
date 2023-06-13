<?php
   if (isset($_POST['login_button'])) {

    $email = filter_var($_POST['log_email'], FILTER_SANITIZE_EMAIL); // Sanitize email

    $_SESSION['log_email'] = $email;  // Store ssion into email. REmove once the login form has been submitted
    $password = md5($_POST['log_password']);  // Get password

    $check_database_query = mysqli_query($con, "SELECT * FROM users WHERE email='$email' and password='$password'");
    $check_login_query = mysqli_num_rows($check_database_query);
    // If the query returns 1
    if ($check_login_query == 1) {
      $row = mysqli_fetch_array($check_database_query); // Fetch the data from the database query
      $username = $row['username'];

      // Reopen closed account by log in to account
      $user_closed_query = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND user_closed='yes'");
      if (mysqli_num_rows($user_closed_query) == 1) {
        $reopoen_account = mysqli_query($con, "UPDATE users SET user_closed='no' WHERE email='$email'");
      }

      $_SESSION['username'] = $username; // Store the username in a session. If null the user logged out
      header("Location: index.php");
      exit();
    }
    else {
      array_push($error_array, "Email or password was incorrect<br>");
    }
  
  }

?>