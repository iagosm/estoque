<?php

include 'conexao.php';

$id = $_GET['id'];
$nivel = $_GET['nivel'];

if($nivel == 1){

    $update = "UPDATE usuarios SET status = 'Ativo', nivel = 1 WHERE id_usuario = '$id'";
    $atualizacao = mysqli_query($conexao, $update);
    echo "Administrador Aprovado!";
}
if($nivel == 2){

    $update = "UPDATE usuarios SET status = 'Ativo', nivel = 2 WHERE id_usuario = '$id'";
    $atualizacao = mysqli_query($conexao, $update);
    echo "Funcionario Aprovado!";
}
if($nivel == 3){

    $update = "UPDATE usuarios SET status = 'Ativo', nivel = 3 WHERE id_usuario = '$id'";
    $atualizacao = mysqli_query($conexao, $update);
    echo "Conferente Aprovado!";
}
header("location: aprovarusuarios.php")

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<div class="container" style="width: 400px;">
<center>
    <a href="menu.php" class="btn btn-sm btn-warning" style="color: #ffffff; margin-top: 20px;">Voltar para o menu</a>
</center>
</div>