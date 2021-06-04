<?php
	include 'include/conn.php';
	
	class usuarios{
		 public $nome;
		 public $sobrenome;
		 public $email;
		 public $senha;
		 public $cpf;
		 public $telefone;
		 public $tipo;
		 public $rua;
		 public $numero;
		 public $datanasc;
		 public $cidade;
		 public $estado;
		 public $cep;
		 public $id;
		
		public function cadastro($conn, $nome, $sobrenome, $email, $senha, $cpf, $telefone, $tipo, $rua, $numero, $datanasc, $cidade, $estado, $cep){
			try{
			$sql = "INSERT INTO usuario(nome, sobrenome, email, senha, cpf, rua, numero, datanasc, cidade, estado, cep) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		
			$prof = $conn -> prepare ($sql);
			$prof -> execute(array($nome, $sobrenome, $email, $senha, $cpf, $rua, $numero, $datanasc, $cidade, $estado, $cep));
			$id = $conn->lastInsertId();
			
			echo "<script>alert('Cadastro efetuado com sucesso!'); location.href = 'telefone.php?id=".$id."&tel=".$telefone."&tipo=".$tipo."'</script>";
			}
			catch(Exception $e){
				echo $e;
			}
		}

		public function cadastro2($conn, $nome, $sobrenome, $email, $senha, $cpf, $telefone, $tipo, $rua, $numero, $datanasc, $cidade, $estado, $cep){
			try{
			$sql = "INSERT INTO usuario(nome, sobrenome, email, senha, cpf, rua, numero, datanasc, cidade, estado, cep) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		
			$prof = $conn -> prepare ($sql);
			$prof -> execute(array($nome, $sobrenome, $email, $senha, $cpf, $rua, $numero, $datanasc, $cidade, $estado, $cep));
			$id = $conn->lastInsertId();
			
			echo "<script>alert('Cadastro efetuado com sucesso!'); location.href = 'telefone2.php?id=".$id."&tel=".$telefone."&tipo=".$tipo."'</script>";
			}
			catch(Exception $e){
				echo $e;
			}
		}

		function editar($conn, $nome, $sobrenome, $email, $senha, $cpf, $rua, $numero, $datanasc, $estado, $cidade, $cep, $id){
				try {
					$sql = "UPDATE usuario SET nome = ?,sobrenome = ?,email = ?,senha = ?,cpf = ?,rua = ?,numero = ?,datanasc = ?,estado = ?,cidade = ?,cep = ? WHERE id_usuario= ?";
					$usuarios = $conn->prepare($sql);
					$usuarios->execute(array($nome, $sobrenome, $email, $senha, $cpf, $rua, $numero, $datanasc, $cidade, $estado, $cep, $id));

					echo "<script>alert('Usuário alterado com sucesso!'); location.href = 'listarusuarios.php'</script>";
					
					$conn = null;
					} 
					catch(PDOException $e){
					echo 'Error: ' . $e->getMessage();
					}
					
		}

		function editartel($conn, $telefone, $tipo, $id){
				try {
					$sql = "UPDATE telefone SET telefone = ?,tipo = ? WHERE id_usuario= ?";
					$usuarios = $conn->prepare($sql);
					$usuarios->execute(array($telefone, $tipo, $id));

					echo "<script>alert('Usuário alterado com sucesso!'); location.href = 'listarusuarios.php'</script>";
					
					$conn = null;
					} 
					catch(PDOException $e){
					echo 'Error: ' . $e->getMessage();
					}
					
		}

		function alterarsenha($conn, $senha, $id){
				try {
					$sql = "UPDATE usuario SET senha = ? WHERE id_usuario= ?";
					$usuarios = $conn->prepare($sql);
					$usuarios->execute(array($senha, $id));

					echo "<script>alert('Senha alterada com sucesso!'); location.href = 'editarperfil.php'</script>";
					
					$conn = null;
					} 
					catch(PDOException $e){
					echo 'Error: ' . $e->getMessage();
					}
					
		}

		function editar2($conn, $nome, $sobrenome, $email, $cpf, $rua, $numero, $datanasc, $estado, $cidade, $cep, $id){
				try {
					$sql = "UPDATE usuario SET nome = ?,sobrenome = ?,email = ?,cpf = ?,rua = ?,numero = ?,datanasc = ?,estado = ?,cidade = ?,cep = ? WHERE id_usuario= ?";
					$usuarios = $conn->prepare($sql);
					$usuarios->execute(array($nome, $sobrenome, $email, $cpf, $rua, $numero, $datanasc, $cidade, $estado, $cep, $id));

					echo "<script>alert('Usuário alterado com sucesso!'); location.href = 'editarperfil.php'</script>";
					
					$conn = null;
					} 
					catch(PDOException $e){
					echo 'Error: ' . $e->getMessage();
					}
					
		}

		function editar3($conn, $telefone, $tipo, $id){
				try {
					$sql = "UPDATE telefone SET telefone = ?,tipo = ? WHERE id_usuario= ?";
					$usuarios = $conn->prepare($sql);
					$usuarios->execute(array($telefone, $tipo, $id));

					echo "<script>alert('Usuário alterado com sucesso!'); location.href = 'editarperfil.php'</script>";
					
					$conn = null;
					} 
					catch(PDOException $e){
					echo 'Error: ' . $e->getMessage();
					}
					
		}

		function atualizar($conn, $email){
			$sql = "SELECT * FROM usuario WHERE email=?";
			$user = $conn -> prepare($sql);
			$user -> execute(array($email));
			//armazena a linha do banco encontrada em uma array
			$dados = $user -> fetch(PDO::FETCH_ASSOC);
			
			//Se encontrar o login e a senha, ira executar este if
			if(count($dados) > 0){
				session_start();
				$_SESSION["nome"] = $dados["nome"];
				$_SESSION["sobrenome"] = $dados["sobrenome"];
				$_SESSION["email"] = $dados["email"];
				$_SESSION["senha"] = $dados["senha"];
				$_SESSION["cpf"] = $dados["cpf"];
				$_SESSION["rua"] = $dados["rua"];
				$_SESSION["numero"] = $dados["numero"];
				$_SESSION["datanasc"] = $dados["datanasc"];
				$_SESSION["estado"] = $dados["estado"];
				$_SESSION["cidade"] = $dados["cidade"];
				$_SESSION["cep"] = $dados["cep"];
				$_SESSION["id_usuario"] = $dados["id_usuario"];
				$_SESSION["nivel"] = $dados["nivel"];
			}
		}

		function atualizar2($conn, $telefone){
			$sql = "SELECT * FROM telefone WHERE telefone=?";
			$user = $conn -> prepare($sql);
			$user -> execute(array($telefone));
			//armazena a linha do banco encontrada em uma array
			$dados = $user -> fetch(PDO::FETCH_ASSOC);
			
			//Se encontrar o login e a senha, ira executar este if
			if(count($dados) > 0){
				session_start();
				$_SESSION["telefone"] = $dados["telefone"];
				$_SESSION["tipo"] = $dados["tipo"];
			}
		}

		function atualizarsenha($conn, $senha){
			$sql = "SELECT * FROM usuario WHERE senha=?";
			$user = $conn -> prepare($sql);
			$user -> execute(array($senha));
			//armazena a linha do banco encontrada em uma array
			$dados = $user -> fetch(PDO::FETCH_ASSOC);
			
			//Se encontrar o login e a senha, ira executar este if
			if(count($dados) > 0){
				session_start();
				$_SESSION["senha"] = $dados["senha"];
			}
		}
		
	}

	
	
?>