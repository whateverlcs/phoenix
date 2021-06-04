<?php
	include 'login/cliente_bloq.php';
	foreach ($_SESSION['dados'] as $produtos) {
		include 'include/conn.php';
		$insert = $conn->prepare("INSERT INTO pedido () VALUES (NULL, ?, ?, ?, ?, ?, ?)");
		$insert->bindParam(1,$produtos['id_produto']);
		$insert->bindParam(2,$produtos['id_usuario']);
		$insert->bindParam(3,$produtos['nome']);
		$insert->bindParam(4,$produtos['quantidade']);
		$insert->bindParam(5,$produtos['preco']);
		$insert->bindParam(6,$produtos['total']);
		$insert->execute();
	}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Phoenix - Finalização do Pedido</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/logo8.ico" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(87,108,117,1) 0%, rgba(37,50,55,1) 100.2% );">
  <a class="navbar-brand text-light" href="#">
  <img src="img/logo8.ico" width="30" height="30" class="d-inline-block align-top" alt="Phoenix">
    Phoenix
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link text-light" href="indexlog.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="indexlog.php#sobre">Sobre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="indexlog.php#marcas">Marcas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="contatolog.php#contato">Contato</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="produtoslog.php#produtos">Produtos</a>
      </li>
    </ul>
     <form action="pesquisarlog.php" method="POST" class="form-inline col px-md-5" style="margin-left: 100px;">
    <input class="form-control mr-sm-2" type="search" placeholder="Procure o seu produto" aria-label="Search" name="pesquisar" id="pesquisar">
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Procurar</button>
  </form>
      <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $_SESSION["nome"] ?>&nbsp<?php echo $_SESSION["sobrenome"] ?>&nbsp <img src="img/login.ico" width="30" height="30" class="d-inline-block align-top" alt="Carrinho"></a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="editarperfil.php">Editar Perfil</a>
          <a class="dropdown-item" href="meuspedidos.php#meuspedidos">Meus Pedidos</a>
          <a class="dropdown-item" href="alterarsenha.php#alterarsenha">Alterar Senha</a>
        </div>
      </li>
     </ul>
     <a class="nav-link text-light" href="carrinho/carrinho.php">
          <img src="img/carrinho.ico" width="30" height="30" class="d-inline-block align-top" alt="Carrinho">
      </a>    
      <a class="nav-link text-light" href="logout.php">
          <img src="img/sair.ico" width="30" height="30" class="d-inline-block align-top" alt="Sair" title="Sair">
        </a> 
</nav>
  </div>

</br>
</br>
</br>

  <div class="container">
  	<h3 class="display-4">&nbsp&nbsp&nbsp&nbsp<img src="img/checked.ico" width="60px" height="60px" class="d-inline-block align-top" alt="Phoenix">Pedido registrado com sucesso.</h3>
  	</br>
  		<p class="lead">&nbsp&nbsp&nbsp<img src="img/alerta.ico" width="30px" height="30px" class="d-inline-block align-top" alt="Phoenix">
Para finalizar a compra e receber seus produtos por favor efetue o pagamento do boleto.</p>
</br>
	<h5 style="color: #fdb813;">Instruções para pagamento do boleto:</h5>
	<p class="lead">O prazo para pagamento do boleto é de 4 dias úteis. Se o pagamento não for realizado até a data informada, seu pedido será cancelado automaticamente.

O prazo de entrega informado durante a compra é contado a partir da confirmação do pagamento pelo banco. Este processo de confirmação pode levar até 2 dias úteis.

O pagamento do boleto pode ser efetuado via internet (com o código de barras) ou diretamente em bancos, casas lotéricas e correios (com o boleto impresso).</p>
  </div>

</br>
</br>
</br>
</br>
</br>
</br>

  <nav class="navbar navbar-dark bg-dark" style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(87,108,117,1) 0%, rgba(37,50,55,1) 100.2% );">
  <a class="navbar-brand" href="#">Phoenix @ 2019</a>
</nav>
</body>
</html>