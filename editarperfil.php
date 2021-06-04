<?php
  include 'login/cliente_bloq.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Phoenix - Editar Perfil</title>
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
          <a class="dropdown-item" href="#editarperfil">Editar Perfil</a>
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
 
<div id="editarperfil"></div>
</br>
</br>
</br>
<h4>&nbsp&nbsp<img src="img/editarperfil.ico" width="30px" height="30px" class="d-inline-block align-top" alt="Phoenix">EDITAR PERFIL</h4>
</br>
</br>
</br>



<form id="formulario" method="POST" action="usuarios3.php">
  <div class="form-row col">
    <input name="id_usuario" type="hidden" value="<?php echo $_SESSION["id_usuario"] ?>" readonly></input>
    <div class="form-group col-md-3">
      <label for="Nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" value='<?php echo $_SESSION["nome"] ?>'>
    </div>
    <div class="form-group col-md-3">
      <label for="Sobrenome">Sobrenome</label>
    <input type="text" class="form-control" id="sobrenome" name="sobrenome" value='<?php echo $_SESSION["sobrenome"] ?>'>
    </div>
  </div>
  <div class="form-row col">
    <div class="form-group col-md-3">
      <label for="Email">Email</label>
      <input type="email" class="form-control" id="email" name="email" value='<?php echo $_SESSION["email"] ?>'>
    </div>
  </div>
  <div class="form-group col-3">
    <label for="CPF">CPF</label>
    <input type="text" class="form-control" id="cpf" name="cpf" value='<?php echo $_SESSION["cpf"] ?>'>
  </div>
  <div class="form-row col">
    <div class="form-group col-3">
      <label for="Rua">Rua</label>
      <input type="text" class="form-control" id="rua" name="rua" value='<?php echo $_SESSION["rua"] ?>'>
    </div>
    <div class="form-group col-3">
      <label for="Número">Número</label>
      <input type="number" class="form-control" id="numero" name="numero" value='<?php echo $_SESSION["numero"] ?>'>
    </div>
  </div>
  <div class="form-group col-3">
      <label for="Data de Nascimento">Data de Nascimento</label>
      <input type="date" class="form-control" value='<?php echo $_SESSION["datanasc"] ?>' id="datanasc" name="datanasc" max="<?php echo date('Y-m-d', strtotime('-18 year')); ?>" required>
    </div>
  <div class="form-row col">
    <div class="form-group col-md-3">
      <label for="Estado">Estado</label>
      <select id="estado" name="estado" class="form-control" value='<?php echo $_SESSION["estado"] ?>'>
        <option></option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="Cidade">Cidade</label>
      <select type="text" class="form-control" id="cidade" name="cidade" value='<?php echo $_SESSION["cidade"] ?>'>
      </select>
    </div>
    <script language="JavaScript" type="text/javascript" charset="utf-8">
      new dgCidadesEstados({
        cidade: document.getElementById('cidade'),
        estado: document.getElementById('estado')
      })
    </script>
    <div class="form-group col-md-2">
      <label for="CEP">CEP</label>
      <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite seu CEP" value='<?php echo $_SESSION["cep"] ?>'>
    </div>
  </div>
  &nbsp&nbsp&nbsp<button type="submit" class="btn btn-primary">Editar</button>
</form>

</br>
</br>
</br>

<h4>&nbsp&nbsp<img src="img/phone.ico" width="30px" height="30px" class="d-inline-block align-top" alt="Phoenix">EDITAR CONTATOS</h4>
</br>
</br>
</br>

<form id="formulario" method="POST" action="perfiltelefone.php">
  <?php
      include 'select.class.php';
          
      $lista = new produtos();
      $lista -> listartelefone($conn);
  ?>
  &nbsp&nbsp&nbsp<button type="submit" class="btn btn-primary">Editar</button>
</form>


</br>
</br>
</br>
</br>


<nav class="navbar navbar-dark bg-dark" style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(87,108,117,1) 0%, rgba(37,50,55,1) 100.2% );">
  <a class="navbar-brand" href="#">Phoenix @ 2019</a>
</nav>

 <script src="js/mask/src/jquery.mask.js"></script>

<script>
$(document).ready(function(){
$('#cep').mask('00000-000');
$('#telefone').mask('(00) 0000-0000');
$('#cpf').mask('000.000.000-00', {reverse: true});
}); 

 $(document).ready( function() {
  $("#formulario").validate({
    // Define as regras
    rules:{
      nome:{
        // campoNome será obrigatório (required) e terá tamanho mínimo (minLength)
        required: true, minlength: 2
      },
      email:{
        // campoEmail será obrigatório (required) e precisará ser um e-mail válido (email)
        required: true, email: true
      },
      cpf:{
        // campoMensagem será obrigatório (required) e terá tamanho mínimo (minLength)
        required: true, minlength: 2
      }
    },
    // Define as mensagens de erro para cada regra
    messages:{
      nome:{
        required: "Digite o seu nome",
        minlength: "O seu nome deve conter, no mínimo, 2 caracteres"
      },
      email:{
        required: "Digite o seu e-mail para contato",
        email: "Digite um e-mail válido"
      },
      cpf:{
        required: "Digite a seu cpf",
        minlength: "O cpf deve ser válido"
      }
    }
  });
});

 $(document).ready( function() {
  $("#formulario2").validate({
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
        required: "Digite o seu e-mail para logar",
        email: "Digite um e-mail válido"
      }
    }
  });
});
</script>

</body>
</html>