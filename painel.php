<?php
  include 'login/admin_bloq.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Phoenix - Painel de Controle</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/logo8.ico" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style2.css">
  <link rel="stylesheet" href="css/style.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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

<h4>&nbsp&nbsp<img src="img/painel.ico" width="40px" height="40px" class="d-inline-block align-top" alt="Phoenix"><a class="card__title">&nbsp&nbspPAINEL DE CONTROLE</a></h4>
</br>
</br>
</br>
<ul class="cards">
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--guitarra"></div>
      <div class="card__content">
        <div class="card__title">Gerenciar Produtos</div>
        <p class="card__text">Adicione, Edite, Exclua e Veja os produtos que estão no sistema. </p>
        <form action="listar.php"><center><button class="btn btn--block card__btn">Gerenciar</button></center></form>
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--pedidos"></div>
      <div class="card__content">
        <div class="card__title">Gerenciar Pedidos</div>
        <p class="card__text">Adicione, Edite, Exclua e Veja os pedidos que estão no sistema.</p>
        <form action="listarpedidos.php"><center><button class="btn btn--block card__btn">Gerenciar</button></center></form>
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--usuarios"></div>
      <div class="card__content">
        <div class="card__title">Gerenciar Usuários</div>
        <p class="card__text">Adicione, Edite, Exclua e Veja os usuários que estão no sistema.</p>
        <form action="listarusuarios.php"><center><button class="btn btn--block card__btn">Gerenciar</button></center></form>
      </div>
    </div>
  </li>
</ul>
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