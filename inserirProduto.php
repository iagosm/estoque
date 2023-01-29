<?php

include 'conexao.php';

$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO estoque(`nroproduto`,`nomeproduto`, `categoria`,`quantidade`,`fornecedor`) VALUES('$nroproduto', '$nomeproduto', '$categoria', '$quantidade', '$fornecedor')";

$inserir = mysqli_query($conexao, $sql);


?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <div class="container" style="width: 500px; margin-top: 20;">
        <center>   
        <h4> Produto Adicionado com sucesso!</h4>
        </center>
        <center>
        <a href="index.php" role="button" class="btn btn-sm btn-primary" style="margin: 0 auto; padding-top: 20px;">Cadastrar novo item</a>
        </center>
    </div>
    