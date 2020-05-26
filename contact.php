<?php
   $pageTitle = 'Contact Page';
   include_once ('_template/header.php');
   include_once('config.php');
?>
<?php include_once ('_template/navbar.php'); ?>					
<?php include_once ('_template/slideshow.php'); ?>
<?php
  if(isset($_POST['submit'])) {
	$name  = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$addContact = "INSERT INTO contacts(name,email,subject,message,created_at) VALUES('$name','$email','$subject','$message',NOW())";

	if(mysqli_query($connection,$addContact)){ ?>
		<script>
	       window.location = 'index.php';
	    </script>  
	<?php }else{
		mysqli_error($connection);   
	}
  }
?>


<div id="content">
	<h1>Contact </h1>
	<div class="form" >
		<form  action="" method="POST">
			<label>Name - required</label><br>
			<input type="text" class="input" id="name" name="name" required="required"><br>

			<label>Email - required</label><br>
			<input type="email" id="email" name="email" required="required"><br>

			<label>Subject</label><br>
			<input type="text" id="subject" name="subject"><br>

			<label>Message</label><br>
			<textarea  id="message" name="message"  ></textarea><br>

			<button type="submit" name="submit">Send</button>
		</form>
	</div>
</div>

<?php include_once('_template/footer.php');?>	
			