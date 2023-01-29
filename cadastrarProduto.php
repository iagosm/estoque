
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Formulário de Cadastro</title>
    
    <style>
        #tamanhoContainer{
            width: 500px;
        }
        h4{margin-bottom: 0;}
        label{margin-top: 10px;}
        #botao{
            font-weight: bold;
            font-size: 18px;
            background-color: #FF1168 ;
            color: #ffffff;
            margin-top:10px;
        }
        a{
            font-weight: bold;
            font-size: 18px;
            color: #ffffff;
            margin-top:10px; 
        }
    </style>
</head>
<body>
    
<div class="container" id="tamanhoContainer" style="margin-top:40px">
<h4>Formulário de Cadastro</h4>
<form action="inserirProduto.php" method="POST" style="margin-top: 20px;">
    <div class="form-group">
    <label for="" class="form-label">Nro Produto</label>
    <input type="number" class="form-control" name="nroproduto" placeholder="Insira o número do produto" required>
    </div>

    <div class="form-group">
    <label for="" class="form-label">Nome Produto</label>
    <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto" required autocomplete="off">
    </div>

    <div class="form-group">
        
    <label for="exampleDataList" class="form-label">Categoria</label>
        <select class="form-control form-select" name="categoria" list="datalistOptions" id="exampleDataList"  required>
            <option selected>Selecione a categoria</option>
            <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `categoria` ORDER BY nome_categoria ASC";
            $inserircategoria = mysqli_query($conexao, $sql);
            while($array = mysqli_fetch_array($inserircategoria)){
                $id_categoria = $array['id_categoria'];
                $categoria = $array['nome_categoria'];
        
        ?>
            <option value="<?php echo $id_categoria?>"><?php echo $categoria?></option>
            
        <?php }; ?>
        </select>
    </div>

    <div class="form-group">
    <label for="" class="form-label">Quantidade</label>
    <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade" required autocomplete="off">
    </div>

    <div class="form-group">
    <label label for="exampleDataList" class="form-label">Fornecedor</label>
        <select name="fornecedor" class="form-control form-select" id="exampleDataList" required>
            <option selected>Selecione o fornecedor</option>    
            <?php
            include 'conexao.php';
            $sql1 = "SELECT * FROM `fornecedor` ORDER BY nome_fornecedor ASC";
            $inserirfornecedor = mysqli_query($conexao, $sql1);
            while($array1 = mysqli_fetch_array($inserirfornecedor)){
                $nome_fornecedor = $array1['nome_fornecedor'];
                $id_fornecedor = $array1['id_fornecedor'];
            
            
            ?>
            <option value="<?php echo $id_fornecedor?>"><?php echo $nome_fornecedor?></option>
            
            <?php }?>
        </select>
    </div>
    <div style="text-align: right;">
    <a href="index.php" class="btn btn-primary">Voltar</a>
    <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
    </div>

</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>