<?php

include 'conexao.php';
echo $id = $_GET['id'];


?>

<?php 



?>
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
    </style>
</head>
<body>
    
<div class="container" id="tamanhoContainer" style="margin-top:40px">
<h4>Alteração de Cadastro</h4>
<form action="atualizarProduto.php" method="POST" style="margin-top: 20px;">
    <?php

    $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
    $buscar = mysqli_query($conexao, $sql);
    while($array = mysqli_fetch_array($buscar)){

    $id_estoque = $array['id_estoque'];
    $nroproduto = $array['nroproduto'];
    $nomeproduto = $array['nomeproduto'];
    $categoria = $array['categoria'];
    $quantidade = $array['quantidade'];
    $fornecedor = $array['fornecedor']

    ?>
    <div class="form-group">
    <label for="" class="form-label">Nro Produto</label>
    <input type="number" class="form-control" name="nroproduto"  value="<?php echo $nroproduto;?>" disabled>
    <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>">
    </div>

    <div class="form-group">
    <label for="" class="form-label">Nome Produto</label>
    <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto;?>">
    </div>

    <div class="form-group">
    <label for="exampleDataList" class="form-label">Categoria</label>
        <select class="form-control form-select" name="categoria" >
            <option selected><?php echo $categoria ?></option>
            <option value="Periféricos">Periféricos</option>
            <option value="Hardware">Hardware</option>
            <option value="Software">Software</option>
            <option value="Celulares">Celulares</option>
        </select>
    </div>

    <div class="form-group">
    <label for="" class="form-label">Quantidade</label>
    <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade;?>">
    </div>

    <div class="form-group">
    <label label for="exampleDataList" class="form-label">Fornecedor</label>
        <select name="fornecedor" class="form-control form-select" value="<?php echo $fornecedor?>">
            <option selected ><?php echo $fornecedor?></option>    
            <option value="A">Fornecedor A</option>
            <option value="B">Fornecedor B</option=>
            <option value="C">Fornecedor C</option>
            <option value="D">Fornecedor D</option>
        </select>
    </div>
    <div style="text-align: right;">
    <button type="submit" id="botao" class="btn btn-sm">Alterar</button>
    </div>
<?php }
    ; ?>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>