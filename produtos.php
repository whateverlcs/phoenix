<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Phoenix - Produtos</title>
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
        <a class="nav-link text-light" href="#produtos">Produtos</a>
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
    <p class="lead text-light">Por sua qualidade e tradi????o, a Phoenix hoje ?? refer??ncia em instrumentos musicais.</p>
    <hr class="my-4">
  <p class="text-light"> Atendemos com a mesma dedica????o e compet??ncia a todos os tipos de m??sicos, desde o principiante at?? o mais exigente profissional.</p>
  <a class="btn btn-primary btn-lg" style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(87,108,117,1) 0%, rgba(37,50,55,1) 100.2% );" href="index.php#sobre" role="button">Saiba mais</a>
  </div>
</div>
<div id="produtos"></div>
</br>
</br>
</br>

<!--GUITARRAS-->

<center><h1 class="display-4 text-dark">Produtos</h1></center>
<div class="card-columns col">
<?php
//inclui o arquivo config(arquivo de conex??o com o banco de dados)
include "include/conn.php";
//Limita o n??mero de registros a serem mostrados por p??gina
$limite = 9;
//Se pg n??o existe atribui 1 a vari??vel pg
$pg = (isset($_GET['pg'])) ? (int)$_GET['pg'] : 1 ;
//Atribui a vari??vel inicio o inicio de onde os registros v??o ser mostrados por p??gina, exemplo 0 ?? 10, 11 ?? 20 e assim por diante
$inicio = ($pg * $limite) - $limite;
 
//seleciona os registros do banco de dados pelo inicio e limitando pelo limite da vari??vel limite
$sql = "SELECT * FROM produto ORDER BY id_produto DESC LIMIT ".$inicio. ",". $limite;
 
try{
  $query = $conn->prepare($sql);  
  $query->execute();
   
  }catch(PDOexception $error_sql){
  echo 'Erro ao retornar os Dados.'.$error_sql->getMessage();
}
 
while($linhas = $query->fetch(PDO::FETCH_ASSOC)){
      
     echo "<div class='card col'>
              <center><img src='uploadsprodutos/".$linhas['imagem']."' class='card-img-top' alt='...' style='height: 200px; width: 250px;'></center>
              <div class='card-body'>
                <h5 class='card-title'>".$linhas["nomeprod"]."</h5>
                <p class='card-text' style='font-size: 18px;'>R$ ".number_format($linhas["preco"], 2, ',', '.')."</br>(12x) R$ ".number_format($linhas["preco"] / 12, 2, ',', '.')." | sem juros no cart??o
                </br>
                </p>
                <a class='btn btn-danger' href='#' role='button' onclick='login()'><img src='img/shop.ico' width='20px' height='20px' class='d-inline-block align-top' alt='Phoenix'>&nbsp&nbspComprar</a>
                <a class='btn btn-danger' href='detalhes.php?id=".$linhas['id_produto']."' role='button'><img src='img/mais.ico' width='20px' height='20px' class='d-inline-block align-top' alt='Phoenix'>&nbsp&nbspDetalhes</a>
              </div>
            </div>";
 
}
echo "</div>";
//seleciona o total de registros  
  $sql_Total = 'SELECT id_produto FROM produto';
   
 try{
  $query_Total = $conn->prepare($sql_Total);  
  $query_Total->execute();
   
  $query_result = $query_Total->fetchAll(PDO::FETCH_ASSOC);
   
  //conta quantos registros tem no banco de dados
  $query_count =  $query_Total->rowCount(PDO::FETCH_ASSOC);
  
 //calcula o total de paginas a serem exibidas
  $qtdPag = ceil($query_count/$limite);
   
  }catch(PDOexception $error_Total){
  echo 'Erro ao retornar os Dados. '.$error_Total->getMessage();
}
 
//Cria os links para navega????o das paginas
echo "  <center><nav aria-label='Page navigation example'>
  <ul class='pagination justify-content-center'>
    <li class='page-item'>
      <a class='page-link' href='produtos.php?pg=1' aria-label='Primeira P??gina'>
        <span aria-hidden='true'>&laquo;</span>
      </a>
    </li>   ";
       if($qtdPag > 1 && $pg<= $qtdPag){
         for($i=1; $i <= $qtdPag; $i++){
              
             if($i == $pg){
                  
                 echo $i;
             }else{
           
         echo "<li class='page-item'><a class='page-link' href='produtos.php?pg=$i'>".$i."</a></li>";
           }
        }
 
       }
       echo "    <li class='page-item'>
      <a class='page-link' href=\"produtos.php?pg=$qtdPag\" aria-label='??ltima P??gina'>
        <span aria-hidden='true'>&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</center>  ";
?>
<script>
function login() {
  alert("Para adicionar ao carrinho, voc?? deve estar logado!");
}
</script>
<script>
function login2() {
  alert("Para acessar ao carrinho, voc?? deve estar logado!");
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

</body>
</html>