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

        <img class="logo" src="img/doa-etec-logo-lado.png" alt="logo">
        
            @if(session('danger'))
              <div>
                {{ session('danger') }}
              </div>
            @endif

        <form action="/criar_conta" method="post">
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="senha1" placeholder="Senha" required>
            <input type="password" name="senha2" placeholder="Repita a senha" required>
            <button type="submit">Criar Conta</button>
            @csrf
        </form>

      </div>
      </div>

</body>
</html>