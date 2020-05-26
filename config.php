<?php
 /* Config.php File */
 ob_start();
 
 ini_set('display_errors',1);
 
 $HOST   = 'localhost';
 $USER   = 'project3';
 $PASS   = 'project3';
 $DBNAME = 'project3';

 // Connect to Server Database
 $connection = mysqli_connect($HOST,$USER,$PASS,$DBNAME);

 if(!$connection){
	 die('Connection Problem');
 }
 
 ob_flush();

 ?>