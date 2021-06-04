<?php
	include 'usuarios.class.php';
	//error_reporting(0);
	
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);
	$cpf = $_POST['cpf'];
	$rua = $_POST['rua'];
	$numero = $_POST['numero'];
	$datanasc = $_POST['datanasc'];
	$estado = $_POST['estado'];
	$cidade = $_POST['cidade'];
	$cep = $_POST['cep'];
	$id = $_GET['id'];
		
	$editar = new usuarios();
	$editar -> editar ($conn, $nome, $sobrenome, $email, $senha, $cpf, $rua, $numero, $datanasc, $estado, $cidade, $cep, $id);
?>