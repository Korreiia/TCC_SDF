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

        <img class="logo" src="img/logoR.png" alt="logo">
        
            @if(session('danger'))
              <div>
                {{ session('danger') }}
              </div>
            @endif

        <form action="/criar_conta" method="post">
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="number" name="cpf" placeholder="CPF" required>
            <input type="number" name="telefone" placeholder="Telefone/Celular" required>
            <input type="text" name="endereco" placeholder="Endereço" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <input type="password" name="senha1" placeholder="Repita a senha" required>
            <button type="submit">Criar Conta</button>
            @csrf
        </form>

      </div>
      </div>

</body>
</html>