<?php
   $pageTitle = 'Blog Page';
   include_once ('_template/header.php');
   include_once('config.php');
?>
<?php include_once ('_template/navbar.php'); ?>				
<?php include_once ('_template/slideshow.php'); ?>
<div id="content">
  <?php
    $sql  = "SELECT * FROM posts WHERE post_type = 'post' " ;
    $result = mysqli_query($connection,$sql);
    while($post = mysqli_fetch_array($result)){
  ?>
  <a href="post.php?id=<?= $post[0]?>"><h1 id="<?= $post[0]?>"><?= $post[1] ?> </h1></a>
  	
  	<div>
  		<img src="images/post_image.png" alt="post_img">
  		<?= $post[2] ?> 
  	</div>	
<?php } ?>	
</div>

<?php include_once('_template/footer.php');?>
