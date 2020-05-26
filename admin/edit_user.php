<?php
  include_once('config.php');

  $id =  $_GET['id'];

  $sql ="SELECT * FROM users WHERE userID = '$id' ";

  $result =  mysqli_query($connection,$sql);

  $user =  mysqli_fetch_array($result);
?>
  
<form action="update_user.php?id=<?= $user[0] ?>" method="POST" >
  <input type="hidden" name="userid" value="<?= $user[0] ?>" >
  <input class="form-control" type="text"     name="username" placeholder="username"  value="<?= $user[1] ?>" autofocus autocomplete="off"><br>
  <input class="form-control" type="password" name="password" placeholder="password"  value="<?= $user[2] ?>"><br>
  <button class="btn btn-primary" type="submit" name="submit">Edit User</button>
</form>