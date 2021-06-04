<?php
	include 'usuarios.class.php';
	//error_reporting(0);
	
	$senha = md5($_POST['senha']);
	$id = $_POST['id_usuario'];
		
	$editar2 = new usuarios();
	$editar2 -> alterarsenha ($conn, $senha, $id);
	$editar2 -> atualizarsenha($conn, $senha);
?>