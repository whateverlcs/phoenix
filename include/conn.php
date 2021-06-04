<?php
	try{
		$conn = new PDO("mysql:host=localhost;dbname=phoenix_db","root","");
	}
	catch(PDOException $e){
		echo $e -> getMessage();
		echo "<br>";
	}
	
?>