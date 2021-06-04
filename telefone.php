<?php
	include "include/conn.php";
	$id = $_GET['id'];
	$telefone = $_GET['tel'];
	$tipo = $_GET['tipo'];
	if (isset($id)) {
		try {
			$sql = "INSERT INTO telefone(telefone, id_usuario, tipo) VALUES(?, ?, ?)";
			$query = $conn->prepare($sql);
			$query->execute(array($telefone, $id, $tipo));
			
			$conn = null;

			header('Location: logincadastro.php');
			} 
			catch(PDOException $e){
			echo 'Error: ' . $e->getMessage();
		}
	}
?>