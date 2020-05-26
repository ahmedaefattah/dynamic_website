<?php
 include_once('config.php');

 $user_id =  $_GET['id'];
  
 $deleteUser = "DELETE FROM users WHERE userID = '$user_id' ";

if(mysqli_query($connection,$deleteUser)){ ?>
  <script>
	window.location = 'dashboard.php?page=mng_users.php';
  </script>
<?php } ?>