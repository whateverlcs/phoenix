<?php 
	include 'include/conn.php';
	
	class produtos {
		public $v1;
		public $v2;
		public $v3;
		public $v4;
		public $v5;
		public $v6;
		public $v7;


		function listarprodutos($conn) {
			try {
				$sql = "SELECT * FROM produto";
				
				$prod = $conn -> prepare($sql);
				$prod -> execute();
				
				foreach($prod as $linhas) {
					
					echo "<tr>";
					echo "<td>".$linhas["id_produto"]."</td>";
					echo "<td>".$linhas["nomeprod"]."</td>";
					echo "<td>".$linhas["tipo"]."</td>";
					echo "<td>".$linhas["marca"]."</td>";
					echo "<td>R$ ".number_format($linhas["preco"], 2, ',', '.')."</td>";
					echo "<td>".$linhas["condicao"]."</td>";
					echo "<td width='200'><img src='uploadsprodutos/".$linhas['imagem']."' width='200px'height='70px' /></td>";
					echo "<td>
							<a href='editar.php?id=".$linhas['id_produto']."'>
								<center><img src='img/edit.ico' width='30px' height='30px' class='d-inline-block align-top' alt='Swing'></center>
							</a></td>";
					echo "<td>
							<a href='confirmacao.php?id=".$linhas['id_produto']."'>
								<center><img src='img/delet.ico' width='30px' height='30px' class='d-inline-block align-top' alt='Swing'></center>
							</a>
						</td>";
					echo "</tr>";
				}
				
				echo "</table>";
				$conn = null;
			}
			catch(Exception $e) {
				echo $e;
			}
		}

		function listarprodutos2($conn) {
			try {
				$sql = "SELECT * FROM pedido";
				
				$prod = $conn -> prepare($sql);
				$prod -> execute();
				
				foreach($prod as $linhas) {
					
					echo "<tr>";
					echo "<td>".$linhas["id_pedido"]."</td>";
					echo "<td>".$linhas["id_produto"]."</td>";
					echo "<td>".$linhas["id_usuario"]."</td>";
					echo "<td>".$linhas["nome"]."</td>";
					echo "<td>".$linhas["quantidade"]."</td>";
					echo "<td>R$ ".number_format($linhas["preco"], 2, ',', '.')."</td>";
					echo "<td>R$ ".number_format($linhas["total"], 2, ',', '.')."</td>";
					echo "<td>
							<a href='editarpedido.php?id=".$linhas['id_pedido']."'>
								<center><img src='img/edit.ico' width='30px' height='30px' class='d-inline-block align-top' alt='Swing'></center>
							</a></td>";
					echo "<td>
							<a href='confirmacaoped.php?id=".$linhas['id_pedido']."'>
								<center><img src='img/delet.ico' width='30px' height='30px' class='d-inline-block align-top' alt='Swing'></center>
							</a>
						</td>";
					echo "</tr>";
				}
				
				echo "</table>";
				$conn = null;
			}
			catch(Exception $e) {
				echo $e;
			}
		}

		function listarusuarios($conn) {
			try {
				$sql = "SELECT * FROM usuario";
				
				$prod = $conn -> prepare($sql);
				$prod -> execute();
				
				foreach($prod as $linhas) {
					
					echo "<tr>";
					echo "<td>".$linhas["id_usuario"]."</td>";
					echo "<td>".$linhas["nome"]."</td>";
					echo "<td>".$linhas["sobrenome"]."</td>";
					echo "<td>".$linhas["email"]."</td>";
					echo "<td>".$linhas["senha"]."</td>";
					echo "<td>".$linhas["cpf"]."</td>";
					echo "<td>".$linhas["rua"]."</td>";
					echo "<td>".$linhas["numero"]."</td>";
					echo "<td>".date('d/m/Y', strtotime($linhas["datanasc"]))."</td>";
					echo "<td>".$linhas["cidade"]."</td>";
					echo "<td>".$linhas["estado"]."</td>";
					echo "<td>".$linhas["cep"]."</td>";
					echo "<td>".$linhas["nivel"]."</td>";
					echo "<td>
							<a href='editarusuarios.php?id=".$linhas['id_usuario']."'>
								<center><img src='img/edit.ico' width='30px' height='30px' class='d-inline-block align-top' alt='Swing'></center>
							</a></td>";
					echo "<td>
							<a href='confirmacaous.php?id=".$linhas['id_usuario']."'>
								<center><img src='img/delet.ico' width='30px' height='30px' class='d-inline-block align-top' alt='Swing'></center>
							</a>
						</td>";
					echo "</tr>";
				}
				
				echo "</table>";
				$conn = null;
			}
			catch(Exception $e) {
				echo $e;
			}
		}

		function listarmeuspedidos($conn) {
			try {
				$sql = "SELECT * FROM pedido where id_usuario = '".$_SESSION['id_usuario']."'";
				
				$prod = $conn -> prepare($sql);
				$prod -> execute();
				
				foreach($prod as $linhas) {
					
					echo "<a href='#' class='list-group-item list-group-item-action'>
						    <div class='d-flex w-100 justify-content-between'>
						      <h5 class='mb-1'>".$linhas["nome"]."</h5>
						      <small>Quantidade:".$linhas["quantidade"]."</small>
						    </div>
						    <p class='mb-1'>Preco: R$".number_format($linhas["preco"], 2, ',', '.')."<br>Total: R$".number_format($linhas["total"], 2, ',', '.')."</p>
						    <small>Status: Aguardando Pagamento.</small>
						  </a>";
					
				}
				$conn = null;
			}
			catch(Exception $e) {
				echo $e;
			}
		}

		function listartelefone($conn) {
			try {
				$sql = "SELECT id_usuario, telefone, tipo FROM telefone where id_usuario = '".$_SESSION['id_usuario']."'";
				
				$prod = $conn -> prepare($sql);
				$prod -> execute();
				
				foreach($prod as $linhas) {
					
					echo "<div class='form-row col'>
					<input name='id_usuario' type='hidden' value='".$linhas["id_usuario"]."' readonly></input>
						    <div class='form-group col-md-3'>
						      <label for='Telefone'>Telefone</label>
						      <input type='text' class='form-control' id='telefone' name='telefone' value='".$linhas["telefone"]."'>
						    </div>
						    <div class='form-group col-md-3'>
						      <label for='Tipo'>Tipo</label>
						      <select class='form-control' id='tipo' name='tipo'>
						      	<option value='".$linhas["tipo"]."'>".$linhas["tipo"]."</option>
						      	<option value='residencial'>Residencial</option>
						      	<option value='celular'>Celular</option>
						      </select>
						    </div>
						  </div>";
					
				}
				$conn = null;
			}
			catch(Exception $e) {
				echo $e;
			}
		}
	}

?>