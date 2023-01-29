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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d03744d826.js" crossorigin="anonymous"></script>
    <title>Listagem de produtos</title>
</head>
<body>

<div class="container" style="margin-top: 40px;">
<h3>Lista de Produtos</h3>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NroProduto</th>
      <th scope="col">Nome Produto</th>
      <th scope="col">Categoria</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Fornecedor </th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
    
        <?php
        include 'conexao.php';
        $sql = "SELECT * 
        FROM estoque 
        RIGHT JOIN categoria
          ON estoque.categoria = categoria.id_categoria
        RIGHT JOIN fornecedor 
          ON estoque.fornecedor = fornecedor.id_fornecedor
        ";
        $busca = mysqli_query($conexao, $sql);

        while ($array = mysqli_fetch_array($busca)) {
       
            $id_estoque = $array['id_estoque'];
            $nroproduto = $array['nroproduto'];
            $nomeproduto = $array['nomeproduto'];
            $categoria = $array['nome_categoria'];
            $quantidade = $array['quantidade'];
            $fornecedor = $array['nome_fornecedor'];
       
            ?>
      <tr>
      <td><?php echo $id_estoque;?></td>
      <td><?php echo $nroproduto;?></td>
      <td><?php echo $nomeproduto;?></td>
      <td><?php echo $categoria;?></td>
      <td><?php echo $quantidade;?></td>
      <td><?php echo $fornecedor;?></td>
      <td>
         <?php
          if(($nivel == 1 )|| ($nivel == 2)){
            
         ?>
      <a class="btn btn-warning btn-sm" href="editarproduto.php?id=<?php echo $id_estoque;?>" role="button" style="color:#ffff ;"><i class="fa-regular fa-pen-to-square"></i>&nbsp;Editar</a>
      <?php } 
        if($nivel == 1 ){
          
          
          ?>
      
      <a class="btn btn-danger btn-sm" href="deletarproduto.php?id=<?php echo $id_estoque;?>" role="button" style="color:#ffff ;"><i class="fa-solid fa-trash"></i></i>&nbsp;Deletar</a>
    </td>
    <?php  } ?>
        </tr>
      <?php } ?>
    

</table>
<div style="text-align: right;">
<a href="index.php" class="btn btn-primary">Voltar</a>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>