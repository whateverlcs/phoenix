<?php
	include 'editar.class.php';
	//error_reporting(0);
	
	$v1 = $_POST['nome'];
	$v2 = $_POST['quantidade'];
	$v3 = $_POST['preco'];
	$v4 = $_POST['total'];
	
	$v5 = $_GET['id'];
		
	$edicao = new guitarras();
	$edicao -> editarped($conn, $v1, $v2, $v3, $v4, $v5);
?>