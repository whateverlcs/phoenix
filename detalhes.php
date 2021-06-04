<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Phoenix - Mais detalhes</title>
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
      <li class="nav-item">
        <a class="nav-link text-light" href="produtos.php#produtos">Produtos</a>
      </li>
    </ul>
     <form action="pesquisar.php" method="POST" class="form-inline col px-md-5" style="margin-left: 100px;">
    <input class="form-control mr-sm-2" type="search" placeholder="Procure o seu produto" aria-label="Search" name="pesquisar" id="pesquisar">
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Procurar</button>
  </form>
      <a class="nav-link text-light" href="logincadastro.php#contato">
          Entrar/Registrar&nbsp<img src="img/login.ico" width="30" height="30" class="d-inline-block align-top" alt="Carrinho">
        </a>
      <a class="nav-link text-light" href="#" onclick='login2()'>
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
  <a class="btn btn-primary btn-lg" style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(87,108,117,1) 0%, rgba(37,50,55,1) 100.2% );" href="indexlog.php#sobre" role="button">Saiba mais</a>
  </div>
</div>
<div id="contato"></div>
</br>
</br>
</br>

 <?php
        include 'include/conn.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM produto WHERE id_produto=?";
                      
        $query = $conn -> prepare($sql);
        $query -> execute(array($id));
        $dados = $query -> fetch(PDO::FETCH_ASSOC);
      ?>

<!--Formulario de contato-->
<div class="container">
<center><h4><?php echo $dados["nomeprod"] ?></h4>
</br>
<div style="border: 2px solid #E6E6E6; width: 50%">
<?php
echo "<img src='uploadsprodutos/".$dados['imagem']."' class='card-img-top' alt='...' style='height: 300px; width: 350px;'>"?>
</br>
</br>
</br>
<h5 class='mb-1' style="color: #6e6c68;">Tipo: <?php echo $dados["tipo"] ?>
<h5 class='mb-1' style="color: #6e6c68;">Marca: <?php echo $dados["marca"] ?></h5>
<h5 class='mb-1' style="color: #6e6c68;">Condição: <?php echo $dados["condicao"] ?></h5>
<h5 class='mb-1' style="color: #6e6c68;">Preço: R$<?php echo number_format($dados["preco"], 2, ',', '.') ?></h5>
<h5 class='mb-1' style="color: #6e6c68;">Em 12x sem juros no cartão de R$<?php echo number_format($dados["preco"] / 12 , 2, ',', '.')?>.</br>Em 1x no cartão com 10% de desconto.</br>
Dê 2x a 3x com 5% de desconto.</h5>

</br>
<?php 
  echo "<a class='btn btn-danger' href='#' role='button'  onclick='login()'><img src='img/shop.ico' width='20px' height='20px' class='d-inline-block align-top' alt='Phoenix'>&nbsp&nbspComprar</a>";
?>
</br>
</br>
</div>


</center>

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
  alert("Para adicionar ao carrinho, você deve estar logado!");
}
</script>
<script>
function login2() {
  alert("Para acessar ao carrinho, você deve estar logado!");
}
</script>

</body>
</html>