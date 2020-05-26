<?php
   $pageTitle = 'About Page';
   include_once ('_template/header.php');
   include_once('config.php');
?>
<?php include_once ('_template/navbar.php'); ?>			
<?php include_once ('_template/slideshow.php'); ?>

<?php
  //$id =  $_GET['id'];
  $sql ="SELECT * FROM posts WHERE postID = 8";
  $result =  mysqli_query($connection,$sql);
  $post =  mysqli_fetch_array($result);
?>
<div id="content">
	<h1><?= $post[1] ?> </h1>
	<div><?= $post[2] ?></div>
</div>
<?php include_once('_template/footer.php');?>	
