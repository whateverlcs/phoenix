<?php
  include 'login/admin_bloq.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Phoenix - Adicionar Usuários</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/logo8.ico" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style3.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jqueryvalidation/dist/jquery.validate.js" type="text/javascript"></script>
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
        <a class="nav-link text-light" href="painel.php">Painel de Controle <span class="sr-only">(current)</span></a>
      </li>
    </ul>
     <form class="form-inline col px-md-5" style="margin-left: 100px;">
  </form>
      <a class="nav-link text-light">
          Bem vindo Administrador
      </a>  
      <a class="nav-link text-light" href="logout.php">
          <img src="img/sair.ico" width="30" height="30" class="d-inline-block align-top" alt="Sair" title="Sair">
        </a>     
</nav>
  </div>
</br>
</br>
<h4>&nbsp&nbsp<img src="img/adicionar2.ico" width="30px" height="30px" class="d-inline-block align-top" alt="Phoenix"><a class="card__title">ADICIONAR USUÁRIOS</a></h4>
</br>
</br>
</br>
    <form id="formulario" method="POST" action="usuarios2.php" enctype="multipart/form-data">
  <div class="form-row col">
    <div class="form-group col-md-3">
      <label for="Nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
    </div>
    <div class="form-group col-md-3">
      <label for="Sobrenome">Sobrenome</label>
    <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Digite seu sobrenome">
    </div>
  </div>
  <div class="form-row col">
    <div class="form-group col-md-3">
      <label for="Email">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu Email">
    </div>
    <div class="form-group col-md-3">
      <label for="Senha">Senha</label>
      <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua Senha">
    </div>
  </div>
  <div class="form-group col-3">
    <label for="CPF">CPF</label>
    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF">
  </div>
  <div class="form-row col">
  <div class="form-group col-3">
    <label for="Telefone">Telefone</label>
    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite seu telefone">
  </div>
  <div class="form-group col-3">
    <label for="Tipo">Tipo</label>
    <select class="form-control" id="tipo" name="tipo">
      <option>Selecione o tipo de telefone</option>
      <option value="residencial">Residencial</option>
      <option value="celular">Celular</option>
    </select>
  </div>
</div>
  <div class="form-row col">
  <div class="form-group col-3">
    <label for="Rua">Rua</label>
    <input type="text" class="form-control" id="rua" name="rua" placeholder="Digite sua Rua">
  </div>
  <div class="form-group col-3">
    <label for="Número">Número</label>
    <input type="number" class="form-control" id="numero" name="numero" placeholder="Digite seu Número">
  </div>
</div>
<div class="form-group col-3">
      <label for="Data de Nascimento">Data de Nascimento</label>
      <input type="date" class="form-control" id="datanasc" name="datanasc" max="<?php echo date('Y-m-d', strtotime('-18 year')); ?>" required>
    </div>
  <div class="form-row col">
    <div class="form-group col-md-3">
      <label for="Estado">Estado</label>
      <select id="estado" name="estado" class="form-control">
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="Cidade">Cidade</label>
      <select type="text" class="form-control" id="cidade" name="cidade">
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
      <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite seu CEP">
    </div>
  </div>
  &nbsp&nbsp&nbsp<button type="submit" class="btn btn-primary">Adicionar</button>
</form>



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

 <script src="js/mask/src/jquery.mask.js"></script>

<script>
$(document).ready(function(){
$('#cep').mask('00000-000');
$('#telefone').mask('(00) 0000-0000');
$('#celular').mask('(00) 00000-0000');
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