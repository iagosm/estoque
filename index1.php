<?php

include 'conexao.php';
include 'script/password.php';

$usuario = $_POST['usuario'];
$senha_usuario = $_POST['senha'];

//verificar se tem email
$sql = "SELECT mail,senha FROM usuarios WHERE mail ='$usuario' AND status = 'Ativo'";
$buscar = mysqli_query($conexao, $sql);

$total = mysqli_num_rows($buscar);

while($array = mysqli_fetch_array($buscar)){
       $senha = $array['senha'];
       $senhadecodificada = sha1($senha_usuario);


if($total > 0){
    //conferir senha
        
    if($senhadecodificada == $senha){
        session_start();
        $_SESSION['usuario'] = $usuario;
        header("Location: menu.php");  
    }else{
        header("location: erro.php");
    }
}else{
    header("location: erro.php");
}

}

?>