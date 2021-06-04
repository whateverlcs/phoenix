<?php
	include 'usuarios.class.php';
	//error_reporting(0);
	
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$cpf = $_POST['cpf'];
	$rua = $_POST['rua'];
	$numero = $_POST['numero'];
	$datanasc = $_POST['datanasc'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$cep = $_POST['cep'];
	$id = $_POST['id_usuario'];
		
	$editar2 = new usuarios();
	$editar2 -> editar2 ($conn, $nome, $sobrenome, $email, $cpf, $rua, $numero, $datanasc, $cidade, $estado, $cep, $id);
	$editar2 -> atualizar($conn, $email);
?>