<?php
   $pageTitle = 'Home Page';
   include_once ('_template/header.php');
   include_once('config.php');
?>
<?php include_once ('_template/navbar.php'); ?>					
<?php include_once ('_template/slideshow.php'); ?>
<div id="content">
<?php
  $sql  = "SELECT postID,title,SUBSTRING(content, 1, 836),created_at,post_type FROM posts WHERE post_type = 'post' " ;
  $result = mysqli_query($connection,$sql);
  while($post = mysqli_fetch_array($result)){
?>
  <h1 ><?= $post[1] ?> </h1>
  <img src="images/post_image.png" alt="post_img">
  <?= $post[2] ?> <a href="blog.php#<?=$post[0]?>"> &gt&gt</a>
<?php } ?> 
</div>

<?php include_once('_template/footer.php');?>	