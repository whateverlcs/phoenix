<?php
	include "logarUser.class.php";
	include "../include/conn.php";
	$usuario = $_POST['email'];
	$senha = md5($_POST['senha']);

	//Executa a função __construct() da class
	$login = new LogarUsuario($conn, $usuario, $senha);
?>