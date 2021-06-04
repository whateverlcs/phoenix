<?php
	include "include/conn.php";
	class produtos{
		public $v5;

		function delete($conn, $v5){
				try {
					$sql = "DELETE from produto WHERE id_produto = '".$v5."'";
					$livros = $conn->prepare($sql);
					$livros->execute(array($v5));
					
					echo "<script>alert('Produto deletado com sucesso!'); location.href = 'listar.php'</script>";
					$conn = null;
					} 
					catch(PDOException $e){
					echo 'Error: ' . $e->getMessage();
					}
		}

		function deleteped($conn, $v5){
				try {
					$sql = "DELETE from pedido WHERE id_pedido = '".$v5."'";
					$livros = $conn->prepare($sql);
					$livros->execute(array($v5));
					
					echo "<script>alert('Pedido deletado com sucesso!'); location.href = 'listarpedidos.php'</script>";
					$conn = null;
					} 
					catch(PDOException $e){
					echo 'Error: ' . $e->getMessage();
					}
		}

		function deleteusuarios($conn, $v5){
				try {
					$sql = "DELETE from telefone WHERE id_usuario = '".$v5."'";
					$usuarios = $conn->prepare($sql);
					$usuarios->execute(array($v5));
					
					echo "<script>alert('Usuário deletado com sucesso!'); location.href = 'delete.pedidous.php?id=".$v5."'</script>";
					$conn = null;
					} 
					catch(PDOException $e){
					echo 'Error: ' . $e->getMessage();
					}
		}
	}
		
?>