<?php 

include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$mail = $_POST['email'];
$senha = $_POST['senha'];
$nivel = $_POST['nivelusuario'];
$status = 'Ativo';

$sql = "INSERT INTO usuarios (nomeusuario, mail, senha, nivel, status) VALUES ('$nomeusuario','$mail',sha1('$senha'),'$nivel', '$status')";
$inserir = mysqli_query($conexao, $sql);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<div class="container" style="width: 400px;">
<center>
    <h3>Usuario Adicionado com sucesso!</h3>
    <a href="cadastro_usuario.php" class="btn btn-sm btn-dark" style="color: #ffffff; margin-top: 20px;">Home</a>
</center>
</div>