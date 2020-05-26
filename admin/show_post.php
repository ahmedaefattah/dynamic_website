<div class="row">
 <?php
  include_once('config.php');

	$sql  = "SELECT * FROM posts";

	$result = mysqli_query($connection,$sql);

	while($post = mysqli_fetch_array($result)){
 ?>
  <div class="col-sm-6 col-md-12">
    <div class="thumbnail">
      <div class="caption">
        <h2><?= $post[1] ?></h2>
        <p><?= $post[2] ?></p>
        <p><a href="dashboard.php?page=mng_comments.php&pid=<?= $post[0] ?>" class="btn btn-primary" role="button"> Show Comments</a></p>
      </div>
    </div>
  </div>
 <?php } ?>
</div>