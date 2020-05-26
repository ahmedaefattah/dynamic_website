<?php
 $id = $_GET['id'];

 include_once('config.php');

 $pid =  $_GET['pid'];

 $delComment = "DELETE FROM comments WHERE commentID = '$id' ";
 
 if(mysqli_query($connection,$delComment)){
?>
 <script>
	 window.location = 'dashboard.php?page=mng_comments.php'+'&pid='+ <?= $pid ?>;
 </script>
 	 
<?php } ?>