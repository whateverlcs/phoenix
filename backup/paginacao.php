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
  <center><h1 class="display-4 text-dark">Guitarras</h1></center>
<div class="card-columns col">
<?php
//inclui o arquivo config(arquivo de conexão com o banco de dados)
include "include/conn.php";
//Limita o número de registros a serem mostrados por página
$limite = 3;
//Se pg não existe atribui 1 a variável pg
$pg = (isset($_GET['pg'])) ? (int)$_GET['pg'] : 1 ;
//Atribui a variável inicio o inicio de onde os registros vão ser mostrados por página, exemplo 0 à 10, 11 à 20 e assim por diante
$inicio = ($pg * $limite) - $limite;
 
//seleciona os registros do banco de dados pelo inicio e limitando pelo limite da variável limite
$sql = "SELECT * FROM guitarras ORDER BY id_guitarra ASC LIMIT ".$inicio. ",". $limite;
 
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
                <p class='card-text' style='font-size: 18px;'>".$linhas["preco"]."
                </br>
                </p>
                <a class='btn btn-danger' href='#' role='button'><img src='img/shop.ico' width='20px' height='20px' class='d-inline-block align-top' alt='Phoenix'>&nbsp&nbspComprar</a>
                <a class='btn btn-danger' href='#' role='button'><img src='img/mais.ico' width='20px' height='20px' class='d-inline-block align-top' alt='Phoenix'>&nbsp&nbspDetalhes</a>
              </div>
            </div>";
 
}
echo "</div>";
//seleciona o total de registros  
  $sql_Total = 'SELECT id_guitarra FROM guitarras';
   
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
 
//Cria os links para navegação das paginas
echo "  <center><nav aria-label='Page navigation example'>
  <ul class='pagination justify-content-center'>
    <li class='page-item'>
      <a class='page-link' href='paginacao.php?pg=1' aria-label='PRIMEIRA PÁGINA'>
        <span aria-hidden='true'>&laquo;</span>
      </a>
    </li>   ";
       if($qtdPag > 1 && $pg<= $qtdPag){
         for($i=1; $i <= $qtdPag; $i++){
              
             if($i == $pg){
                  
                 echo $i;
             }else{
           
         echo "<li class='page-item'><a class='page-link' href='paginacao.php?pg=$i'>".$i."</a></li>";
           }
        }
 
       }
       echo "    <li class='page-item'>
      <a class='page-link' href=\"paginacao.php?pg=$qtdPag\" aria-label='ÚLTIMA PÁGINA'>
        <span aria-hidden='true'>&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</center>  ";
?>
</body>
</html>