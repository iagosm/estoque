<?php

include 'conexao.php';

$id = $_POST['id'];
$categoria = $_POST['categoria'];
$sql = "UPDATE categoria SET nome_categoria = '$categoria' WHERE id_categoria = '$id';";
$update = mysqli_query($conexao, $sql);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<div class="container" style="width: 400px;">
<center>
    <h3>Atualizado com sucesso!</h3>
    <a href="listarCategoria.php" class="btn btn-sm btn-warning" style="color: #ffffff; margin-top: 20px;">Lista de Produtos</a>
</center>
</div>