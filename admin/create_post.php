<?php
  include_once('config.php');
  if(isset($_POST['submit'])) {
	$title  = $_POST['title'];
	$content= $_POST['content'];

	$addPost = "INSERT INTO posts(title,content,created_at) VALUES('$title','$content',NOW())";

	if(mysqli_query($connection,$addPost)){ ?>
		<script>
	       window.location = 'dashboard.php?page=mng_posts.php';
	    </script>  
	<?php }else{
		mysqli_error($connection);   
	}
  }
?>

<form action="" method="POST" >
   <input    class="form-control" type="text" name="title" placeholder="Title"  required="required" autofocus autocomplete="off"><br>
   <textarea class="form-control" name="content" placeholder="Content" required="required" style="resize: vertical;height: 400px;"></textarea><br>
   <button   class="btn btn-primary" type="submit" name="submit">Create Post</button>
</form>