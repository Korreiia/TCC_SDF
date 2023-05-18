<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style_criar_conta.css">
    <script src="/js/olho.js" ></script>
    <title>Criar Conta</title>
</head>
<body>
    
<div class="container">
      <div class="formulario">

        <img class="logo" src="img/reciclaetecNs.png" alt="logo">
        
            @if(session('danger'))
              <div>
                {{ session('danger') }}
              </div>
            @endif

        <form action="/criar_conta" method="post">
            <input type="text" name="nome" placeholder="Nome Completo" required>
            <input type="number" name="cpf" placeholder="CPF" required>
            <input type="number" name="telefone" placeholder="Telefone/Celular" required>
            <input type="text" name="endereco" placeholder="Endereço" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="senha" id= "senha" placeholder="Senha" required>
            <span class="fa fa-eye" aria-hidden="true" onclick="mostrarSenha()"></span>
            <input type="password" name="senha1" id= "senha1" placeholder="Repita a senha" required>
            <span class="fa fa-eye2" aria-hidden="true" onclick="mostrarSenha()"></span>
            <button type="submit">Criar Conta</button>
            @csrf
        </form>

      </div>
      </div>

</body>
</html>