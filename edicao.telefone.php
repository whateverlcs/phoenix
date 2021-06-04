<?php
	include 'usuarios.class.php';
	//error_reporting(0);
	
	$telefone = $_POST['telefone'];
	$tipo = $_POST['tipo'];
	$id = $_GET['id'];
		
	$editar = new usuarios();
	$editar -> editartel ($conn, $telefone, $tipo, $id);
?>