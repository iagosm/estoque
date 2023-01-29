
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Adiconando produtos</title>
</head>
<body>
<?php

include 'conexao.php';
session_start();   
$usuario = $_SESSION['usuario'];
if(!isset($_SESSION['usuario'])){
  header("Location: index.php");
}

$sql = "SELECT nivel FROM usuarios WHERE mail = '$usuario' AND status = 'Ativo'";
$buscar = mysqli_query($conexao, $sql);

$array = mysqli_fetch_array($buscar);
echo $nivel = $array['nivel'];
?>

<div class="container" style="margin-top: 100px;">

<div class="row">
  
    <h3 style="text-align: center; margin-bottom: 30px;">Selecione uma opção abaixo</h3>

  <?php

  if(($nivel ==  1) || ($nivel == 2)){


  ?>

  <div class="col-sm-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Produtos</h5>
        <p class="card-text">Opção para adicionar produto em nosso estoque.</p>
        <a href="cadastrarProduto.php" class="btn btn-primary">Cadastrar</a>
      </div>
    </div>
  </div>
<?php   } ?>
  <div class="col-sm-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista de Produtos</h5>
        <p class="card-text">Visualizar, editar e excluir os produtos.</p>
        <a href="listarProduto.php" class="btn btn-primary">Listar</a>
      </div>
    </div>
  </div>

  <div class="col-sm-5" style="margin-top: 20px;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Categoria</h5>
        <p class="card-text">Opção para adicionar novas categorias</p>
        <a href="adicionarcategoria.php" class="btn btn-primary">Adicionar</a>
      </div>
    </div>
  </div>

  <div class="col-sm-5" style="margin-top: 20px;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista de Categoria</h5>
        <p class="card-text">Visualizar, editar e excluir as categorias.</p>
        <a href="listarCategoria.php" class="btn btn-primary">Listar</a>
      </div>
    </div>
  </div>

  <div class="col-sm-5" style="margin-top: 20px;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Fornecedor</h5>
        <p class="card-text">Opção para adicionar novos Fornecedores</p>
        <a href="adicionarfornecedor.php" class="btn btn-primary">Adicionar</a>
      </div>
    </div>
  </div>

  <div class="col-sm-5" style="margin-top: 20px;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista Fornecedor</h5>
        <p class="card-text">Lista Fornecedor.</p>
        <a href="listarFornecedor.php" class="btn btn-primary">Listar</a>
      </div>
    </div>
  </div>

  <div class="col-sm-5" style="margin-top: 20px;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Usuários</h5>
        <p class="card-text">Opção para adicionar usuários</p>
        <a href="aprovarusuarios.php" class="btn btn-primary">Adicionar Usuários</a>
      </div>
    </div>
  </div>

  <div class="col-sm-5" style="margin-top: 20px;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Aprovar Usuários</h5>
        <p class="card-text">Opção para aprovar usuários</p>
        <a href="aprovarusuarios.php" class="btn btn-primary">Aprovar Usuários</a>
      </div>
    </div>
  </div>


</div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>