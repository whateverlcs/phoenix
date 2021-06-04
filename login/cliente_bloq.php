<?php
	session_start();
	
	
	if(!isset($_SESSION["nivel"])){
		header("Location:index.php");
		exit();
    }
	elseif($_SESSION["nivel"] == 1){
		header("Location:painel.php");
	}
?>