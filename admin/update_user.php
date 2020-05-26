<?php
  include_once('config.php');

  $id = $_POST['userid'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $updateUser = "UPDATE users SET username = '$username', password = '$password'  WHERE userID = '$id' ";

if(mysqli_query($connection,$updateUser)){ ?>
  <script>
    window.location = 'dashboard.php?page=mng_users.php';
  </script>
<?php } ?>