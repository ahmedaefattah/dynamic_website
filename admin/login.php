<?php
 $pageTitle = 'Login';
 session_start();
 include_once ('_template/header.php');
 include_once('config.php');
?>

<?php
  if(isset($_POST['submit'])){
	 $user  =  mysqli_real_escape_string($connection,$_POST['username']);
	 $pass  =  md5(mysqli_real_escape_string($connection,$_POST['password']));
	
	 $sql = "SELECT  * FROM users WHERE username = '$user' AND password = '$pass' ";	
	 $result = mysqli_query($connection,$sql);

	  if(mysqli_num_rows($result) == 1){
		  $row = mysqli_fetch_array($result);
		  $_SESSION['user']  = $row[1];    //username 
		  $_SESSION['group'] = $row[3];   // group
		  header('Location:dashboard.php');
	  }else{
		  $errorLogin = 'Check your username and password';
	  }
  }
?>
<div class="container">
  <form class="login-form" action="" method="POST">
    <?php
      if(isset($errorLogin)){
	     echo "<p class='text-center' style='color:red;'>" . $errorLogin . "</p>";
      }
    ?>
    <h3 class="text-center">Log in to Dashborad</h3>
    <div class="form-group">
    	<input class="form-control" type="text" name="username" placeholder="Username" >
    </div>
    <div class="form-group">
   	  <input class="form-control" type="password" name="password" placeholder="Password">
    </div>
     <div class="form-group">
   	  <button class="btn btn-primary btn-block" name="submit" type="submit">Log in</button>
    </div>
  </form>
</div>

<?php include_once('_template/footer.php');?>