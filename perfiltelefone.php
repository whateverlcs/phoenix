<?php
	include 'usuarios.class.php';
	//error_reporting(0);
	
	$telefone = $_POST['telefone'];
	$tipo = $_POST['tipo'];
	$id = $_POST['id_usuario'];
		
	$editar2 = new usuarios();
	$editar2 -> editar3 ($conn, $telefone, $tipo, $id);
	$editar2 -> atualizar2($conn, $telefone);
?>