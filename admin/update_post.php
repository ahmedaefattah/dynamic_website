<?php
  include_once('config.php');
  
  $id = $_POST['postid'];
  $title = $_POST['title'];
  $content = $_POST['content'];

  $updatePost = "UPDATE posts SET title = '$title', content = '$content', created_at = NOW() WHERE postID = '$id' ";

if(mysqli_query($connection,$updatePost)){ ?>
  <script>
    window.location = 'dashboard.php?page=mng_posts.php';
  </script>
<?php } ?>