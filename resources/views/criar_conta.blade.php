<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style_criar_conta.css">
    <title>Criar Conta</title>
</head>
<body>
    
<div class="container">
      <div class="formulario">

        <img class="logo" src="img/logo_alternativa.png" alt="fabião">
        
        <form action="create" method="get">
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <input type="password" name="senha" placeholder="Repita a senha" required>
            <button type="submit">Criar Conta</button>
            @csrf
        </form>

      </div>
      </div>

</body>
</html>