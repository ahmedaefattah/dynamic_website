<?php
   $pageTitle = 'Post Page';
   include_once ('_template/header.php');
   include_once('config.php');
?>
<?php include_once ('_template/navbar.php'); ?>				
<?php include_once ('_template/slideshow.php'); ?>

<!--Show Post -->
<?php
  $id =  $_GET['id'];
  $sql = "SELECT * FROM posts WHERE postID = '$id' AND post_type = 'post' ";
  $result =  mysqli_query($connection,$sql);
  $post   =  mysqli_fetch_array($result);
?>
<div id="content">
    <h1><?= $post[1] ?> </h1>
    <div>
      <img src="images/post_image.png" alt="post_img">
      <?= $post[2] ?> 
    </div>  
</div>

<!--Comment Form -->
<?php
  if(isset($_POST['submit'])) {
  $name  = $_POST['name'];
  $email  = $_POST['email'];
  $comment  = $_POST['comment'];
  $addComment = "INSERT INTO comments(name,email,comment,created_at,postID) VALUES('$name','$email','$comment',NOW() ,'$id')";

  if(mysqli_query($connection,$addComment)){ ?>
    <script>
         window.location = 'post.php?id=' + <?= $id?>;
    </script>  
  <?php }else{
    mysqli_error($connection);   
    }
  }
?>
<?php include_once('_template/comment.php');?>

<!--Show Comments -->
<div id="showcomment">
 <?php
  $sql = "SELECT comments.commentID ,comments.name,comments.comment , DATE_FORMAT(comments.created_at, '%d %M %Y %r') , posts.postID FROM comments INNER JOIN posts ON posts.postID = comments.postID AND posts.postID ='$id'";
  $data = mysqli_query($connection,$sql);     
  while($comment = mysqli_fetch_array($data)){?>
      <h3><?=$comment[1]?></h3>
    <h4><?=$comment[3]?></h4>
    <div ><p><?=$comment[2]?></p></div>  

<?php } ?>
</div>

<?php include_once('_template/footer.php');?>
