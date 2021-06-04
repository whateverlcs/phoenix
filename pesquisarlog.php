<?php
  include 'login/cliente_bloq.php';
?>
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
<center><h1 class="display-4 text-dark">Produtos</h1></center>
<div class="card-columns col">
<?php
	include 'include/conn.php';

	if(isset($_POST['pesquisar'])){
		$pesquisar = $_POST['pesquisar'];
		$sql = "SELECT * FROM produto where nomeprod LIKE '%$pesquisar%'";
	}
	else{
	$sql = "SELECT * FROM produto where nomeprod LIKE '%$pesquisar%'";
	}
	
	try{
		$query = $conn -> prepare($sql);
        $query -> execute();

        foreach ($query as $linhas) {

        	echo "<div class='card col'>
              <center><img src='uploadsprodutos/".$linhas['imagem']."' class='card-img-top' alt='...' style='height: 200px; width: 250px;'></center>
              <div class='card-body'>
                <h5 class='card-title'>".$linhas["nomeprod"]."</h5>
                <p class='card-text' style='font-size: 18px;'>R$ ".number_format($linhas["preco"], 2, ',', '.')."
                </br>
                </p>
                <a class='btn btn-danger' href='carrinho/carrinho.php?acao=add&id=".$linhas['id_produto']."' role='button'><img src='img/shop.ico' width='20px' height='20px' class='d-inline-block align-top' alt='Phoenix'>&nbsp&nbspComprar</a>
                <a class='btn btn-danger' href='detalheslog.php?id=".$linhas['id_produto']."' role='button'><img src='img/mais.ico' width='20px' height='20px' class='d-inline-block align-top' alt='Phoenix'>&nbsp&nbspDetalhes</a>
              </div>
            </div>";

        }
        $conn = null;
        echo "</div>";
	}
	catch(Exception $e) {
		echo $e;
	}
	
?>
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