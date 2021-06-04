<?php
	include 'editar.class.php';
	//error_reporting(0);
	
	$v1 = $_POST['nomeprod'];
	$v7 = $_POST['tipo'];
	$v2 = $_POST['marca'];
	$v3 = $_POST['preco'];
	$v4 = $_POST['condicao'];
	
	$v5 = $_GET['id'];
	$v6 = $_FILES['imagem'];
	$titulo_imagem = $v6['name'];
	$tmp = $v6['tmp_name'];
	$formato = pathinfo($titulo_imagem, PATHINFO_EXTENSION);
	$tamanho = $v6['size'];
	$link = uniqid(). ".".$formato;
	$v6 = $link;
	move_uploaded_file($tmp, 'uploadsprodutos'.'/'.$link);
		
	$edicao = new guitarras();
	$edicao -> editar($conn, $v1, $v7, $v2, $v3, $v4, $v6, $v5, $link);
?>