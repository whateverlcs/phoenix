<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Phoenix</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/logo8.ico" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/mask/jquery.mask.js"></script>
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
        <a class="nav-link text-light" href="#sobre">Sobre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#marcas">Marcas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="contato.php#contato">Contato</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="produtos.php#produtos">Produtos</a>
      </li>
    </ul>
     <form action="pesquisar.php" method="POST" class="form-inline col px-md-5" style="margin-left: 100px;">
    <input class="form-control mr-sm-2" type="search" placeholder="Procure o seu produto" aria-label="Search" name="pesquisar" id="pesquisar">
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Procurar</button>
  </form>
   		<a class="nav-link text-light" href="logincadastro.php#logincadastro">
        	Entrar/Registrar&nbsp<img src="img/login.ico" width="30" height="30" class="d-inline-block align-top" alt="Carrinho">
        </a>
     	<a class="nav-link text-light" href="#" onclick='login()'>
        	<img src="img/carrinho.ico" width="30" height="30" class="d-inline-block align-top" alt="Carrinho">
     	</a>    
</nav>
  </div>
 
<!--TOP ABOUT-->
	<div class="jumbotron jumbotron-fluid" style="height: 500px; background-image: url('img/33.jpg');">
  <div class="container">
    <h1 class="display-4 text-light">Phoenix</h1>
    <p class="lead text-light">Por sua qualidade e tradi????o, a Phoenix hoje ?? refer??ncia em instrumentos musicais.</p>
    <hr class="my-4">
  <p class="text-light"> Atendemos com a mesma dedica????o e compet??ncia a todos os tipos de m??sicos, desde o principiante at?? o mais exigente profissional.</p>
  <a class="btn btn-primary btn-lg" style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(87,108,117,1) 0%, rgba(37,50,55,1) 100.2% );" href="#sobre" role="button">Saiba mais</a>
  </div>
</div>
<div id="sobre"></div>
</br>

<!--CARDS-->

<div class="card-deck" style="margin-right:0px; margin-top: 50px;">
  <div class="card border-light mb-3">
    <center><img src="img/home1.ico" class="card-img-top" alt="..." style="height: 100px; width: 100px;"></center>
    <div class="card-body">
      <center><h4 class="card-title">Guitarras/Viol??es/Outros</h4></center>
      <h5 class="card-text text-secondary" style="text-align: center;">N??s oferemos as mais variadas guitarras e viol??es que voc?? poderia encontrar.</h5>
      <center><a href="produtos.php#produtos" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Explore</a></center>
    </div>
  </div>
  <div class="card border-light mb-3">
    <center><img src="img/conta.ico" class="card-img-top" alt="..." style="height: 100px; width: 100px;"></center>
    <div class="card-body">
      <center><h4 class="card-title">Crie sua conta! ?? facil.</h4></center>
      <h5 class="card-text text-secondary" style="text-align: center;">Crie sua conta para adquirir seus produtos escolhidos.</h5>
      <center><a href="logincadastro.php#logincadastro" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Crie j??</a></center>
    </div>
  </div>
  <div class="card border-light mb-3">
    <center><img src="img/home2.ico" class="card-img-top" alt="..." style="height: 100px; width: 100px;"></center>
    <div class="card-body">
      <center><h4 class="card-title">D??vidas? Contate-nos</h4></center>
      <h5 class="card-text text-secondary" style="text-align: center;">Voc?? possui alguma reclama????o, d??vida, sugest??o ou proposta de parceria? Contate-nos.</h5>
      <center><a href="contato.php#contato" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Contate-nos</a></center>
    </div>
  </div>
</div>
<div id="marcas"></div>
</br>
</br>
</br>
</br>

<!--MARCAS(SLIDE)-->

<center><h3 class="card-title">Marcas que atendemos</h3>
<div class="card-body border-light mb-3"><h5 class="card-text text-secondary" style="text-align: center; width:50%;">Com uma variedade de instrumentos, em espec??fico na parte de guitarras, temos marcas consagradas no mercado como Fender, Gibson e Ibanez.</h5></div>
</center>

<center><div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="5500">
        <img src="img/slide1.jpg" class="d-block" alt="..." style="width: 90%; height: 400px;">
    </div>
    <div class="carousel-item" data-interval="5500">
      <img src="img/slide2.jpg" class="d-block" alt="..." style="width: 90%; height: 400px;">
    </div>
    <div class="carousel-item" data-interval="5500">
      <img src="img/slide3.jpg" class="d-block" alt="..." style="width: 90%; height: 400px;">
    </div>
  </div>
</div>
</center>



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
      <p class="card-text">Amplo conhecimento, aliado ?? boa comunica????o, honestidade e bom senso.</p></center>
    </div>
  </div>
  <div class="card border-light">
    <center><img src="img/info2.ico" class="card-img-top" alt="..." style="height: 100px; width: 100px;"></center>
    <div class="card-body">
      <center><h5 class="card-title">REGULAGEM GR??TIS</h5>
      <p class="card-text">Procedimento de cortesia para todos os instrumentos de cordas.</p></center>
    </div>
  </div>
  <div class="card border-light">
    <center><img src="img/info1.ico" class="card-img-top" alt="..." style="height: 100px; width: 100px;"></center>
    <div class="card-body">
      <center><h5 class="card-title">PRODUTOS EM ESTOQUE</h5>
      <p class="card-text">Todos os produtos ofertados est??o dispon??veis em estoque. Exceto Cross Docking.</p></center>
    </div>
  </div>
  <div class="card border-light">
    <center><img src="img/info3.ico" class="card-img-top" alt="..." style="height: 100px; width: 100px;"></center>
    <div class="card-body">
      <center><h5 class="card-title">ENVIO SEGURO</h5>
      <p class="card-text">Grande experi??ncia na expedi????o. Armazenamento, embalagem e envios com m??xima seguran??a.</p></center>
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

<script>
function login() {
  alert("Para acessar ao carrinho, voc?? deve estar logado!");
}
</script>

</body>
</html>