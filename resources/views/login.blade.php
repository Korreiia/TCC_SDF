<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style_login.css">
    <title>SDF Login</title>
  </head>
  <body>
    
    <div class="container">
      <div class="login">

        <img class="logo" src="img/logo_alternativa.png" alt="fabião">
        
        <form action="{{ route('fazerLogin')}}" method="post">
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Login</button>
            @csrf
        </form>
        
        <a href="/criar_conta">Criar Conta</a>
        
      </div>
      </div>

  </body>
</html>