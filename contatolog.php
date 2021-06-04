<?php
  include 'login/cliente_bloq.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Phoenix - Contato</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/logo8.ico" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/jqueryvalidation/dist/jquery.validate.js" type="text/javascript"></script>
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
        <a class="nav-link text-light" href="#contato">Contato</a>
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
          <a class="dropdown-item" href="editarperfil.php#editarperfil">Editar Perfil</a>
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
 
<!--TOP ABOUT-->
	<div class="jumbotron jumbotron-fluid" style="height: 500px; background-image: url('img/33.jpg');">
  <div class="container">
    <h1 class="display-4 text-light">Phoenix</h1>
    <p class="lead text-light">Por sua qualidade e tradição, a Phoenix hoje é referência em instrumentos musicais.</p>
    <hr class="my-4">
  <p class="text-light"> Atendemos com a mesma dedicação e competência a todos os tipos de músicos, desde o principiante até o mais exigente profissional.</p>
  <a class="btn btn-primary btn-lg" style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(87,108,117,1) 0%, rgba(37,50,55,1) 100.2% );" href="indexlog.php#sobre" role="button">Saiba mais</a>
  </div>
</div>
<div id="contato"></div>
</br>
</br>
</br>

<!--Formulario de contato-->
<h1 class="display-4">&nbsp&nbsp&nbsp<img src="img/cadastro.png" width="60px" height="60px" class="d-inline-block align-top" alt="Phoenix">Contate-nos</h1>
</br>
</br>
</br>


<form id="formulario">
  <div class="form-row col">
    <div class="form-group col-md-6">
      <label for="Nome">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu Nome">
    </div>
    <div class="form-group col-md-6">
      <label for="Email">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu Email">
    </div>
  </div>
  <div class="form-group col">
    <label for="Assunto">Assunto</label>
    <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Digite o Assunto">
  </div>
  <div class="form-group col">
    <label for="Mensagem">Mensagem</label>
    <textarea class="form-control" id="mensagem" name="mensagem" rows="3"></textarea>
  </div>
  &nbsp&nbsp&nbsp<button type="submit" class="btn btn-primary">Enviar</button>
</form>


</br>
</br>
</br>
</br>


<nav class="navbar navbar-dark bg-dark" style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(87,108,117,1) 0%, rgba(37,50,55,1) 100.2% );">
  <a class="navbar-brand" href="#">Phoenix @ 2019</a>
</nav>


<script>
  $(document).ready( function() {
  $("#formulario").validate({
    // Define as regras
    rules:{
      email:{
        // campoEmail será obrigatório (required) e precisará ser um e-mail válido (email)
        required: true, email: true
      }
    },
    // Define as mensagens de erro para cada regra
    messages:{
      email:{
        required: "Digite o seu e-mail para contato",
        email: "Digite um e-mail válido"
      }
    }
  });
});

</script>
</body>
</html>