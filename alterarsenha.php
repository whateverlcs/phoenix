<?php
  include 'login/cliente_bloq.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Phoenix - Alterar Senha</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/logo8.ico" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script language="JavaScript" type="text/javascript" src="js/cidades-estados-1.4-utf8.js"></script>
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
          <a class="dropdown-item" href="editarperfil.php#editarperfil">Editar Perfil</a>
          <a class="dropdown-item" href="meuspedidos.php#meuspedidos">Meus Pedidos</a>
          <a class="dropdown-item" href="#alterarsenha">Alterar Senha</a>
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
 
<div id="alterarsenha"></div>
</br>
</br>
</br>
<h4>&nbsp&nbsp<img src="img/pass.ico" width="30px" height="30px" class="d-inline-block align-top" alt="Phoenix">ALTERAÇÃO DE SENHA</h4>
</br>
</br>
</br>



<form id="formulario" method="POST" action="senha.php">
  <div class="form-row col">
    <input name="id_usuario" type="hidden" value="<?php echo $_SESSION["id_usuario"] ?>" readonly></input>
    <div class="form-group col-md-3">
      <label for="Senha">Digite a nova Senha</label>
    <input type="password" class="form-control" id="senha" name="senha">
    </div>
  </div>
  &nbsp&nbsp&nbsp<button type="submit" class="btn btn-primary">Alterar</button>
</form>


</br>
</br>
</br>
</br>
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