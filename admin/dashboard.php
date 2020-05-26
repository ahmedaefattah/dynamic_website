<?php 
  session_start();

	if(!isset($_SESSION['group'])){
		header('Location:login.php');
		exit();
	}

  $pageTitle = 'Dashboard';
  include_once('_template/header.php'); 
?> 

<div class="container">	
  <div class="row">
    <div class="col-md-12">
      <h2><span class="glyphicon glyphicon-dashboard"></span> Dashboard <small>Manage your website.</small></h2>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <span>Welcome, <?= $_SESSION['user']; ?> </span>
    </div>
  </div>

  <div class="row">
    <?php if(isset($_SESSION['group']) && $_SESSION['group'] ==1){ ?>
      <div class="col-md-3" >
        <ul class="list-group">
          <li class="list-group-item">
            <a href="dashboard.php?page=create_post.php">Create Post</a>
          </li>
          <li class="list-group-item">
            <a href="dashboard.php?page=show_post.php">Show Posts</a><span class="badge"><?= getCount('posts') ?></span>
          </li>
          <li class="list-group-item">
            <a href="dashboard.php?page=mng_posts.php">Manage Posts</a>
          </li>
          <li class="list-group-item">
            <a href="dashboard.php?page=create_user.php">Create User</a>
          </li>
          <li class="list-group-item">
            <a href="dashboard.php?page=mng_users.php">Manage Users</a>
          </li>
          <li class="list-group-item">
            <a href="logout.php">Sign out</a>
          </li>
        </ul>	
      </div>
    <?php } else if(isset($_SESSION['group']) && $_SESSION['group'] == 2){ ?>
	    <div class="col-md-3" >
        <ul class="list-group">
          <li class="list-group-item">
            <a href="dashboard.php?page=mng_posts.php">Posts</a>
          </li>
          <li class="list-group-item">
            <a href="logout.php">Sign out</a>
          </li>
        </ul>	
      </div>
	  <?php } else if(isset($_SESSION['group']) && $_SESSION['group'] ==3){ ?>
	    <div class="col-md-3" >
        <ul class="list-group">
          <li class="list-group-item">
            <a href="dashboard.php?page=create_post.php">Create Post</a>
          </li> 
          <li class="list-group-item">
            <a href="logout.php">Sign out</a>
          </li>
        </ul>	
      </div>
    <?php } ?>

      <div class="col-md-9" >
        <div class="panel panel-default">
          <div class="panel-heading">
            <?php
      			    if(isset($_GET['page'])){
      				  $url = $_GET['page'];
      				  switch($url){
      					case 'show_post.php':
      					   echo 'Show Posts';
      					   break;
      					case 'create_post.php':
      					   echo 'Create Post';
      					   break;
      					case 'mng_posts.php':
      					   echo 'Manage Posts';
      					   break;
      					case 'edit_post.php':
      					   echo 'Edit Post';
      					   break;
						case 'mng_users.php':
							echo 'Manage Users ';
							break;
						case 'create_user.php':
							echo 'Create User';
							break;
						case 'edit_user.php':
							echo 'Edit User';
							break;
					  }
					}else{
						echo 'Home Page';
					}  
      		  ?> 
          </div>
         
          <div class="panel-body">
            <?php
			        if(isset($_GET['page'])) {
				        $p = $_GET['page'];
				        include_once($p);
			        }else{
				        include_once('dashboard_default.php');  
			        }
			      ?> 
          </div>
       </div>
      </div>
  </div>
</div>
 
<?php include_once('_template/footer.php');?>
