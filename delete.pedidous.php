<?php
	include "include/conn.php";
	$v5 = $_GET['id'];
	if (isset($v5)) {
		try {
			$sql = "DELETE from pedido WHERE id_usuario = '".$v5."'";
			$query = $conn->prepare($sql);
			$query->execute(array($v5));
			
			$conn = null;

			header("Location: delete.telefone.php?id=".$v5."");
			} 
			catch(PDOException $e){
			echo 'Error: ' . $e->getMessage();
		}
	}
?>