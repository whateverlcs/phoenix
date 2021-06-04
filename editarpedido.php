<?php
  include 'login/admin_bloq.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Phoenix - Editar Pedidos</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/logo8.ico" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style3.css">
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
<h4>&nbsp&nbsp<img src="img/edit.ico" width="30px" height="30px" class="d-inline-block align-top" alt="Phoenix"><a class="card__title">EDITAR PEDIDOS</a></h4>
<?php
        include 'include/conn.php';
        $id = $_GET['id'];
        echo "<form method='POST' id='formulario' enctype='multipart/form-data' action='edicao.pedidos.php?id=".$id." '>";
        $sql = "SELECT * FROM pedido WHERE id_pedido=?";
                      
                  $query = $conn -> prepare($sql);
                  $query -> execute(array($id));
                  $dados = $query -> fetch(PDO::FETCH_ASSOC);
      ?>
</br>
</br>
</br>
  <div class="form-row col">
    <div class="form-group col-md-3">
      <label for="ID_Pedido">ID_Pedido</label>
    <input type="text" class="form-control" id="id_pedido" name="id_pedido" value='<?php echo $dados["id_pedido"] ?>' readonly>
    </div>
    <div class="form-group col-md-3">
      <label for="ID_Produto">ID_Produto</label>
    <input type="text" class="form-control" id="id_produto" name="id_produto" value='<?php echo $dados["id_produto"] ?>' readonly>
    </div>
    <div class="form-group col-md-3">
      <label for="ID_Usuario">ID_Usuario</label>
    <input type="text" class="form-control" id="id_usuario" name="id_usuario" value='<?php echo $dados["id_usuario"] ?>' readonly>
    </div>
    <div class="form-group col-md-3">
      <label for="Nome do produto">Nome do produto</label>
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do produto" value='<?php echo $dados["nome"] ?>'>
    </div>
  </div>
  <div class="form-row col">
    <div class="form-group col-md-3">
      <label for="Quantidade">Quantidade</label>
      <input type="text" class="form-control" id="quantidade" name="quantidade" value='<?php echo $dados["quantidade"] ?>'>
    </div>
    <div class="form-group col-md-3">
      <label for="Preço">Preço</label>
      <input type="text" class="form-control" id="preco" name="preco" placeholder="Digite o preço do produto" value='<?php echo $dados["preco"] ?>'>
    </div>
    <div class="form-group col-md-3">
      <label for="Total">Total</label>
      <input type="text" class="form-control" id="total" name="total" placeholder="Digite o total do produto" value='<?php echo $dados["total"] ?>'>
    </div>
  </div>
  </div>
  &nbsp&nbsp&nbsp<button type="submit" class="btn btn-primary">Editar</button>
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

</body>
</html>