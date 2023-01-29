<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Adicionando categoria</title>
    <style>
        #tamanhoContainer{
            width: 500px;
            margin-top: 20px;
        }
        h4{margin-bottom: 0;}
        label{margin-top: 10px;}
        #botao{
            font-weight: bold;
            font-size: 18px;
            background-color: #FF1168 ;
            color: #ffffff;
            /* margin-top:10px; */
            
        }
        a{
            font-weight: bold;
            font-size: 18px;
            color: #ffffff;
            /* margin-top:10px;  */
        }
    </style>
</head>
<body>

<div class="container" id="tamanhoContainer">
    <h3>Adicionando Fornecedor</h3>
    <form action="inserirfornecedor.php" method="POST">
        <div class="form-group">
            <label for="fornecedor">Nome do Fornecedor</label><br>
            <input type="text" name="fornecedor" class="form-control" placeholder="Digite o nome do fornecedor" autocomplete="off">
        </div>
        
        <div style="text-align:right; margin-top: 10px;">
        <button type="submit" name="btn-enviar" id="botao" class="btn btn-sm">Cadastrar</button>
        <a href="index.php" class="btn btn-primary">Voltar</a>
        </div>
    </form>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>