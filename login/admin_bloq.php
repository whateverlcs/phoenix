<?php
	session_start();
	
	if(!isset($_SESSION["nivel"])){
		header("Location:index.php");	
		exit();
    }
	elseif($_SESSION["nivel"] == 2){
		header("Location:indexlog.php");
	}
?>