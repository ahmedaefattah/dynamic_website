<?php
 include_once('config.php');

 $post_id =  $_GET['id'];
  
 $deletePost = "DELETE FROM posts WHERE postID = '$post_id' ";

if(mysqli_query($connection,$deletePost)){ ?>
   <script>
	  window.location = 'dashboard.php?page=mng_posts.php';
   </script>
<?php } ?>