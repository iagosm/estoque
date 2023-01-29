<!DOCTYPE html>
<html lang="pt-br ">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d03744d826.js" crossorigin="anonymous"></script>
    <title>Listagem de produtos</title>
</head>
<body>

<div class="container" style="margin-top: 40px; width: 400px;">
<h3>Lista de Produtos</h3>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome da Categoria</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
    
        <?php
        include 'conexao.php';
        $sql = "SELECT * FROM `categoria`";
        $busca = mysqli_query($conexao, $sql);

        while ($array = mysqli_fetch_array($busca)) {
            $id_categoria = $array['id_categoria'];
            $nome_categoria = $array['nome_categoria'];
            ?>
      <tr>
      <td><?php echo $nome_categoria;?></td>
      <td>
      <a class="btn btn-warning btn-sm" href="editarcategoria.php?id=<?php echo $id_categoria?>" role="button" style="color:#ffff ;"><i class="fa-regular fa-pen-to-square"></i>&nbsp;Editar</a>
      <a class="btn btn-danger btn-sm" href="deletarcategoria.php?id=<?php echo $id_categoria;?>" role="button" style="color:#ffff ;"><i class="fa-solid fa-trash"></i></i>&nbsp;Deletar</a>
      </td>
        </tr>
      <?php } ?>
    

</table>
<div style="text-align: right;">
<a href="menu.php" class="btn btn-primary">Voltar</a>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html> 