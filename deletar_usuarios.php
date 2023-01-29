<?php

include 'conexao.php';

$id = $_GET['id'];

$deletar = "DELETE FROM usuarios WHERE id_usuario = '$id'";
$deletado = mysqli_query($conexao, $deletar);

header("location: aprovarusuarios.php")

?>