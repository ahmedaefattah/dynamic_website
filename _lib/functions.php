<?php
/* function.php file */

include_once('config.php');

function setTitle() {
	global $pageTitle;
	if(isset($pageTitle)){
		echo $pageTitle;
	}else{
		echo 'default'; 
	}
} 

function getCount($tbl) {
	global $connection;
	$sql = "SELECT COUNT(*) FROM " . $tbl;
	$count = mysqli_query($connection,$sql);
	$fetchedCount = mysqli_fetch_array($count);
	return $fetchedCount[0];
}