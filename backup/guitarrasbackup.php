<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Phoenix - Guitarras</title>
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
        <a class="nav-link text-light" href="index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="index.php#sobre">Sobre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="index.php#marcas">Marcas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="contato.php#contato">Contato</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produtos</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#guitarras">Guitarras</a>
          <a class="dropdown-item" href="violoes.php#violoes">Violões</a>
          <a class="dropdown-item" href="outros.php#outros">Outros</a>
        </div>
      </li>
    </ul>
     <form class="form-inline col px-md-5" style="margin-left: 100px;">
    <input class="form-control mr-sm-2" type="search" placeholder="Procure o seu produto" aria-label="Search">
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Procurar</button>
  </form>
   		<a class="nav-link text-light" href="logincadastro.php#contato">
        	<img src="img/login.ico" width="30" height="30" class="d-inline-block align-top" alt="Carrinho">
        </a>
     	<a class="nav-link text-light" href="#">
        	<img src="img/carrinho.ico" width="30" height="30" class="d-inline-block align-top" alt="Carrinho">
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
  <a class="btn btn-primary btn-lg" style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(87,108,117,1) 0%, rgba(37,50,55,1) 100.2% );" href="index.php#sobre" role="button">Saiba mais</a>
  </div>
</div>
<div id="guitarras"></div>
</br>
</br>
</br>

<!--GUITARRAS-->

<center><h1 class="display-4 text-dark">Guitarras</h1></center>
<div class="card-columns col">
<?php
          include 'select.class.php';
          
          $lista = new produtos();
          $lista -> listarguitarras($conn);
        ?>
      </div>

<!--PAGINAÇÃO-->

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

</br>
</br>
</br>
</br>
</br>
</br>

<div class="card-group border-light">
  <div class="card border-light">
    <center><img src="img/info4.ico" class="card-img-top" alt="..." style="height: 100px; width: 100px;"></center>
    <div class="card-body">
      <center><h5 class="card-title">
ATENDIMENTO ESPECIALIZADO</h5>
      <p class="card-text">Amplo conhecimento, aliado à boa comunicação, honestidade e bom senso.</p></center>
    </div>
  </div>
  <div class="card border-light">
    <center><img src="img/info2.ico" class="card-img-top" alt="..." style="height: 100px; width: 100px;"></center>
    <div class="card-body">
      <center><h5 class="card-title">REGULAGEM GRÁTIS</h5>
      <p class="card-text">Procedimento de cortesia para todos os instrumentos de cordas.</p></center>
    </div>
  </div>
  <div class="card border-light">
    <center><img src="img/info1.ico" class="card-img-top" alt="..." style="height: 100px; width: 100px;"></center>
    <div class="card-body">
      <center><h5 class="card-title">PRODUTOS EM ESTOQUE</h5>
      <p class="card-text">Todos os produtos ofertados estão disponíveis em estoque. Exceto Cross Docking.</p></center>
    </div>
  </div>
  <div class="card border-light">
    <center><img src="img/info3.ico" class="card-img-top" alt="..." style="height: 100px; width: 100px;"></center>
    <div class="card-body">
      <center><h5 class="card-title">ENVIO SEGURO</h5>
      <p class="card-text">Grande experiência na expedição. Armazenamento, embalagem e envios com máxima segurança.</p></center>
    </div>
  </div>
</div>

</br>
</br>
</br>
</br>


<nav class="navbar navbar-dark bg-dark" style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(87,108,117,1) 0%, rgba(37,50,55,1) 100.2% );">
  <a class="navbar-brand" href="#">Phoenix @ 2019</a>
</nav>

</body>
</html>