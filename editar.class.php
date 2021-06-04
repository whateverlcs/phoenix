<?php
	include "include/conn.php";
	class guitarras{
		public $v1;
		public $v7;
		public $v2;
		public $v3;
		public $v4;
		public $link;
		public $v5;
		
		function editar($conn, $v1, $v7, $v2, $v3, $v4, $link, $v5){
				try {
					$sql = "UPDATE produto SET nomeprod = ?,tipo = ?,marca = ?,preco = ?,condicao = ?,imagem = ? WHERE id_produto= ?";
					$livros = $conn->prepare($sql);
					$livros->execute(array($v1, $v7, $v2, $v3, $v4, $link, $v5));

					echo "<script>alert('Produto alterado com sucesso!'); location.href = 'listar.php'</script>";
					
					$conn = null;
					} 
					catch(PDOException $e){
					echo 'Error: ' . $e->getMessage();
					}
					
		}

		function editarped($conn, $v1, $v2, $v3, $v4, $v5){
				try {
					$sql = "UPDATE pedido SET nome = ?,quantidade = ?,preco = ?,total = ? WHERE id_pedido= ?";
					$livros = $conn->prepare($sql);
					$livros->execute(array($v1, $v2, $v3, $v4, $v5));

					echo "<script>alert('Pedido alterado com sucesso!'); location.href = 'listarpedidos.php'</script>";
					
					$conn = null;
					} 
					catch(PDOException $e){
					echo 'Error: ' . $e->getMessage();
					}
					
		}

	}
		
?>