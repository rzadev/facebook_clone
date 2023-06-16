<?php
  include("includes/header.php");
  include("includes/classes/User.php");
  include("includes/classes/Post.php");
  // session_destroy();

  // If the post button has been pressed create a new instance of a class
  if (isset($_POST['post'])) {
    $post = new Post($con, $userLogggedIn);
    $post->submitPost($_POST['post_text'], 'none');
  }

?>

  <div class="user_details column">
    <a href="<?php echo $userLogggedIn; ?>"><img src="<?php echo $user['profile_pic'] ?>"></a>

    <div class="user_details_left_right">
      <a href="<?php echo $userLogggedIn; ?>">
        <?php
          echo $user['first_name'] . " " . $user['last_name'];

        ?>
      </a>
      <br>
      <?php echo "Posts: " . $user['num_posts'] . "<br>";
      echo "Likes: " . $user['num_likes'];
      ?>
    </div> 
  </div>

  <div class="main_column column">
    <form class="post_form" action="index.php" method="POST">
      <textarea name="post_text" id="post_text" placeholder="Got something to say?" ></textarea>
      <input type="submit" name="post" id="post_button" value="Post">
      <hr>
    </form>
    <?php
  $user_obj = new User($con, $userLogggedIn);
  echo $user_obj->getFirstAndLastName();
  ?>
  </div>




  </div>  <!-- End wrapper -->
</body>
</html>