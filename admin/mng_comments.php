<table class="table table-bordered table-hover">
  <thead>
    <tr>
     <th>Comment</th>
     <th>Action</th>
    </tr>
  </thead>
  <tbody>
 <?php
  $id = $_GET['pid'];

  include_once('config.php');

  $sql = "SELECT  comments.comment , comments.commentID , posts.postID FROM comments INNER JOIN posts ON 
                 posts.postID = comments.postID AND posts.postID ='$id'";

  $data = mysqli_query($connection,$sql);		  
  
  while($comment = mysqli_fetch_array($data)){
?>	  
 
    <tr>
      <td><?= $comment[0] ?></td>
      <td><a href="delete_comment.php?id=<?= $comment[1] ?>&pid=<?= $comment[2] ?>" class="btn btn-danger btn-sm glyphicon glyphicon-trash"></a>
      </td>
    </tr> 
 <?php } ?>
 </tbody>
</table>