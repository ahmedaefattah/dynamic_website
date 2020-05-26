<table id="users" class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>User</th>
      <th>Role</th>
      <th>Created Date</th>
      <th>Control</th>
    </tr>
  </thead>
  <tbody> 
<?php
 include_once('config.php');
 
 $sql = "SELECT * FROM users";
 $result =  mysqli_query($connection,$sql);
 
 while($user = mysqli_fetch_array($result)){
?>
  <tr>
    <td><?= $user[1] ?></td>
    <td><?= $user[3] ?></td>
    <td><?= $user[4] ?></td>
    <td>
      <a href="dashboard.php?page=edit_user.php&id=<?= $user[0] ?>" class="btn btn-primary btn-sm glyphicon glyphicon-edit"> </a>
      <a href="delete_user.php?id=<?= $user[0] ?>" class="btn btn-danger btn-sm glyphicon glyphicon-trash"></a>
    </td>
  </tr> 
<?php } ?>
  </tbody>
</table>
 
<script type="text/javascript">
  $(document).ready(function() {
    $('#users').DataTable();
  });
</script>