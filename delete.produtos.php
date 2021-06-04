<?php
	include 'delete.prod.php';
	error_reporting(0);
	
	$v5 = $_GET['id'];
		
	$delete = new produtos();
	$delete -> delete($conn, $v5);
?>