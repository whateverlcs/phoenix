<?php
	include 'include/conn.php';
	
	class guitar{
		 public $codigo;
		 public $nomeprod;
		 public $tipo;
		 public $marca;
		 public $preco;
		 public $condicao;
		 public $imagem;
		
		public function cadastro($conn, $nomeprod, $tipo, $marca, $preco, $condicao, $imagem){
			try{
			$sql = "INSERT INTO produto(nomeprod, tipo, marca, preco, condicao, imagem) VALUES(?, ?, ?, ?, ?, ?)";
		
			$prof = $conn -> prepare ($sql);
			$prof -> execute(array($nomeprod, $tipo, $marca, $preco, $condicao, $imagem));
			$conn = null;
			
			echo "<script>alert('Produto adicionado com sucesso!'); location.href = 'listar.php'</script>";
			}
			catch(Exception $e){
				echo $e;
			}
		}

		public function cadastrovio($conn, $nomeprod, $marca, $preco, $condicao, $imagem){
			try{
			$sql = "INSERT INTO violoes(nomeprod, marca, preco, condicao, imagem) VALUES(?, ?, ?, ?, ?)";
		
			$prof = $conn -> prepare ($sql);
			$prof -> execute(array($nomeprod, $marca, $preco, $condicao, $imagem));
			$conn = null;
			
			echo "<script>alert('Produto adicionado com sucesso!'); location.href = 'listarvio.php'</script>";
			}
			catch(Exception $e){
				echo $e;
			}
		}
		
	}

	
	
?>