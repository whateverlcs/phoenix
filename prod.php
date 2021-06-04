<?php
	include 'produtos.class.php';
	//error_reporting(0);
	
	$nomeprod = $_POST['nomeprod'];
	$tipo = $_POST['tipo'];
	$marca = $_POST['marca'];
	$preco = $_POST['preco'];
	$condicao = $_POST['condicao'];
	
	$imagem = $_FILES['imagem'];
	$titulo_img = $imagem['name'];
	$tmp = $imagem['tmp_name'];
	$formato = pathinfo($titulo_img, PATHINFO_EXTENSION);
	$tamanho = $imagem['size'];
	$link = uniqid().".".$formato;
	$upload = move_uploaded_file($tmp, 'uploadsprodutos'.'/'.$link);
		
	$cadastro = new guitar();
	$cadastro -> cadastro ($conn, $nomeprod, $tipo, $marca, $preco, $condicao, $link);
?>