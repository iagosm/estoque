<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Cadastro Usuário</title>
    <style>
        .form-group{
            margin-top: 10px;
        }
    </style>
</head>
<body>
    
<div class="container" style="margin-top: 150px;width: 400px;border-radius: 15px; border: 2px #f3f3f3 solid; padding: 34px;">
<h4>Cadastro Usuário</h2>
<form action="inserir_usuarioexterno.php" method="POST">
<div class="form-group">
    <label for="nomeusuario">Nome do Usuário</label>
    <input type="text" class="form-control" name="nomeusuario" required autocomplete="off" placeholder="Nome Completo">
</div>

<div class="form-group">
<label for="nomeusuarioemail">E-mail</label>
    <input type="email" class="form-control" name="email" required autocomplete="off" placeholder="Seu E-mail completo">
</div>

<div class="form-group">
<label for="senha">Senha do Usuário</label>
    <input type="password" class="form-control" id="txtSenha" name="senha" required autocomplete="off" placeholder="Digite sua senha">
</div>

<div class="form-group">
<label for="senha2">Repetir Senha</label>
    <input type="password" class="form-control" oninput="validaSenha(this)" name="senha2" required autocomplete="off" placeholder="Repita sua senha">
    <small>Precisa ser igual a senha digitada acima</small>
</div>


<div style="text-align: right; margin-top: 15px;">
<a href="index.php" class="btn btn-sm btn-dark">Voltar</a>
<button type="submit" class="btn btn-sm btn-dark">Cadastrar</button>
</div>



</form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script>
function validaSenha (input){ 
	if (input.value != document.getElementById('txtSenha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
} 
</script>
</body>
</html>