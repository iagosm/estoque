<?php




include 'conexao.php';

$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO fornecedor(`nome_fornecedor`) VALUES('$fornecedor')";
$inserir = mysqli_query($conexao, $sql);



?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<div class="container" style="width: 400px;">
<center>
    <h3>Adicionado com sucesso!</h3>
    <a href="adicionarcategoria.php" class="btn btn-sm btn-warning" style="color: #ffffff; margin-top: 20px;">Adiconar novas categorias</a>
    <a href="index.php" class="btn btn-sm btn-dark" style="color: #ffffff; margin-top: 20px;">Home</a>
</center>
</div>