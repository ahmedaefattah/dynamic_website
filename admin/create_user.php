<?php
 include_once('config.php');

 if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$type = $_POST['type'];
	
    $addUser = "INSERT INTO users  (userID,username,password,type,created_at) VALUES (NULL,'$username','$password','$type', now()) "; 
	
	if(mysqli_query($connection,$addUser)){ ?>
	  <script>
	    window.location = 'dashboard.php?page=mng_users.php';
	  </script>
	<?php }else{
	   mysqli_error($connection); 
	}
 } 
?>		 


<form  action="" method="POST">
	<input class="form-control" type="text"     name="username" placeholder="Username" required="required" autofocus autocomplete="off"><br>
	<input class="form-control" type="password" name="password" placeholder="Password" required="required" ><br>
	<select class="form-control" name="type">
		<option>-- User Type --</option>
		<option value="1">Admin</option>
		<option value="2">Manager</option>
		<option value="3">Creator</option>
	 </select><br>
	 <button class="btn btn-primary" type="submit" name="submit">Create user</button>
</form>