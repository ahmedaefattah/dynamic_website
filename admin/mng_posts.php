<table id="posts" class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>POST</th>
      <th>Created Date</th>
      <th>Control</th>
    </tr>
  </thead>
  <tbody> 
<?php
 include_once('config.php');

 $sql = "SELECT * FROM posts";

 $result =  mysqli_query($connection,$sql);
 
 while($post = mysqli_fetch_array($result)) {
?>
  <tr>
    <td><?= $post[1] ?></td>
    <td><?= $post[3] ?></td>
    <td>
      <a href="dashboard.php?page=edit_post.php&id=<?= $post[0] ?>" class="btn btn-primary btn-sm glyphicon glyphicon-edit"></a>
      <a href="delete_post.php?id=<?= $post[0] ?>" class="btn btn-danger btn-sm glyphicon glyphicon-trash"></a>
    </td>
  </tr>
<?php } ?>
  </tbody>
</table>
 
<script type="text/javascript">
 $(document).ready(function() {
    $('#posts').DataTable();
  });
</script>