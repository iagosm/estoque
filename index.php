<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Tela de Login</title>
    <style>
        #tamanho{
            width: 350px;
            -webkit-box-shadow: 10px 10px 28px 0px rgba(194,194,194,1);
            -moz-box-shadow: 10px 10px 28px 0px rgba(194,194,194,1);
            box-shadow: 10px 10px 28px 0px rgba(194,194,194,1);
        }
    </style>
</head>
<body>

<div class="container" id="tamanho" style="margin-top: 250px; border-radius: 15px; border: 2px #f3f3f3 solid; padding: 20px;"> 
<center>
<img src="cadeado.png" alt="" width="125px" height="125px" >
</center>    
    <form action="index1.php" method="post">
        <div class="form-group">
            <label for="usuario">Usuário</label>
            <input type="text" id="usuario" class="form-control" name="usuario" placeholder="Digite seu usuário" autocomplete="off">
        </div>
            
        <div class="form-group">
        <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite sua senha" autocomplete="off" required>
        </div>
    
    <div style="text-align: right; margin-top: 15px;">
        <button type="submit" class="btn btn-sm btn-success">Entrar</button>
    </div>
    </form>
</div>

<center style="margin-top: 10px;">
    <small>Você não possui cadastro? Clique <a href="cadastro_usuarioexterno.php">Você</a> </small>
</center>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>