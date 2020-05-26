<?php
  include_once('config.php');

  $id =  $_GET['id'];

  $sql ="SELECT * FROM posts WHERE postID = '$id' ";

  $result =  mysqli_query($connection,$sql);

  $post =  mysqli_fetch_array($result);
?>
  
<form action="update_post.php?id=<?= $post[0] ?>" method="post" >
   <input type="hidden" name="postid" value="<?= $post[0] ?>" >
   <input class="form-control" type="text" name="title" placeholder="Title"  value="<?= $post[1] ?>" autofocus autocomplete="off"><br>
   <textarea class="form-control" name="content" placeholder="Content"  style="resize: vertical;height: 400px;" ><?= $post[2] ?></textarea><br>
   <button class="btn btn-primary" type="submit" name="submit">Edit Post</button>
</form>