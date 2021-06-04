<?php
class LogarUsuario{
	
	//Essa função é executada automaticamente, é só fazer outro arquivo pra receber os dados e passar os Parâmetros
	//ex: $logar = new nomeclass($login, $senha);
	function __construct($conn, $usuario, $senha){
		$this->usuario = $usuario;
		$this->senha = $senha;
		$this->conn = $conn;
		
		// Se a verificação estiver certa, executa a função do login
		if($this->verificarCampos()){
			$this->logar();
		}
	}
	//Função pra verificar os campos
	public function verificarCampos(){
		if(empty($this->usuario) || empty($this->senha)){
			echo "<script>alert('Todos os campos devem estar preenchidos');
				window.location.assign('../logincadastro.php');
			</script>";
			return false;
		}
		else{
			return true;
		}
	}
	
	public function logar(){
		try{
			$sql = "SELECT * FROM usuario WHERE email=? AND senha=?";
			$user = $this->conn -> prepare($sql);
			$user -> execute(array($this->usuario, $this->senha));
			//armazena a linha do banco encontrada em uma array
			$dados = $user -> fetch(PDO::FETCH_ASSOC);
			
			//Se encontrar o login e a senha, ira executar este if
			if($dados > 0){
				session_start();
				$_SESSION["nome"] = $dados["nome"];
				$_SESSION["sobrenome"] = $dados["sobrenome"];
				$_SESSION["email"] = $dados["email"];
				$_SESSION["senha"] = $dados["senha"];
				$_SESSION["cpf"] = $dados["cpf"];
				$_SESSION["rua"] = $dados["rua"];
				$_SESSION["numero"] = $dados["numero"];
				$_SESSION["datanasc"] = $dados["datanasc"];
				$_SESSION["cidade"] = $dados["cidade"];
				$_SESSION["estado"] = $dados["estado"];
				$_SESSION["cep"] = $dados["cep"];
				$_SESSION["id_usuario"] = $dados["id_usuario"];
				$_SESSION["nivel"] = $dados["nivel"];
				//Login do cliente
				if($_SESSION["nivel"] == 2){
					header("Location:../indexlog.php");
					echo "<script>alert('Bem vindo')</script>";
					exit;
				}
				//Login do funcionário
				elseif($_SESSION["nivel"] == 1){
					header("Location:../painel.php");
					exit;
				}
				else{
					echo "<script>alert('Login e/ou senha incorretos');
					window.location.assign('../logincadastro.php');
					</script>";
				}
			}
			else{
				echo "<script>alert('Login e/ou senha incorretos');
				window.location.assign('../logincadastro.php');
				</script>";
			}
			$this->conn = null;
		}
		catch(Exception $e){
			echo $e -> getMessage();
		}
	}
}

?>