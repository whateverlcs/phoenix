<?php
	include 'usuarios.class.php';
	//error_reporting(0);
	
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	$tipo = $_POST['tipo'];
	$rua = $_POST['rua'];
	$numero = $_POST['numero'];
	$datanasc = $_POST['datanasc'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$cep = $_POST['cep'];
		
	$cadastro = new usuarios();
	$cadastro -> cadastro2 ($conn, $nome, $sobrenome, $email, $senha, $cpf, $telefone, $tipo, $rua, $numero, $datanasc, $cidade, $estado, $cep);
?>